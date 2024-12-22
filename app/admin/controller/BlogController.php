<?php

namespace App\Admin\Controller;


use App\Admin\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Blog Sayfası İçeriği...';

        $app = new BlogModel();
        $this->data["posts"] = $app->posts(); // çoklu veri çekme
        // $this->data["ByIdpost"] = $app->ByIdposts(); // tekli veri çekme 

        $this->view("admin/blogs", $this->data);

    }



    public function create(): void
    {
        $this->data["title"] = 'Blog Ekleme Sayfası İçeriği...';
        $BlogModel = new BlogModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userID = $_SESSION['user_id'] ?? '';
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $image = $_FILES['image']['name'] ?? ''; // Düzenlendi
            $poststatus = $_POST['post_status'] ?? '';


            if (empty($title) || empty($content) || empty($image)) { // $email kaldırıldı
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurun';
                $this->view('admin/blogs', $this->data);
                return;
            }

            $targetDir = "uploads/";
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["image"]["tmp_name"]);

            if ($check === false) {
                $_SESSION['warning_message'] = 'Dosya bir resim değil.';
                $this->view('admin/blogs', $this->data);
                return;
            }

            if (file_exists($targetFile)) {
                $_SESSION['warning_message'] = 'Üzgünüz, dosya zaten mevcut.';
                $this->view('admin/blogs', $this->data);
                return;
            }

            if ($_FILES["image"]["size"] > 500000) {
                $_SESSION['warning_message'] = 'Üzgünüz, dosya çok büyük.';
                $this->view('admin/blogs', $this->data);
                return;
            }

            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $_SESSION['warning_message'] = 'Üzgünüz, dosya yüklenirken bir hata oluştu.';
                $this->view('admin/blogs', $this->data);
                return;
            }

            
            if ($BlogModel->Blog($title)) {
                $_SESSION['warning_message'] = 'Aynı Başlık zaten mevcut';
                $this->view('admin/blogs', $this->data);
                return;
            }

            if ($BlogModel->createPost($userID, $title, $image, $content, $poststatus)) {
                // Kayıt başarılı, kullanıcıyı yönlendir
                $_SESSION['success_message'] = 'Blog başarıyla kaydedildi.';
                header('Location: /admin/blogs');
                exit();
            } else {
                // Kayıt başarısız, hata mesajı göster
                $_SESSION['error_message'] = 'Kayıt başarısız';
            }
        }

        $this->view('admin/blogs', $this->data);
    }




}
