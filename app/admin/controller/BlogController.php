<?php

namespace App\Admin\Controller;


use App\Admin\Model\BlogModel;
use App\Admin\Model\KategoriModel;
use System\Engine\Controller;

class BlogController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Blog Sayfası İçeriği...';
        $app = new BlogModel();
        $appCategory = new KategoriModel();
        $this->data["CategoryName"] = $appCategory->category();  // kategoriden verileri cekiyor     
        $this->data["posts"] = $app->posts(); // çoklu veri çekme
        // $this->data["ByIdpost"] = $app->ByIdposts(); // tekli veri çekme 

        $this->view("admin/blogs", $this->data);
       

    }



    public function create(): void
    {
        $this->data["title"] = 'Blog Ekleme Sayfası İçeriği...';
        $BlogModel = new BlogModel();
      
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userID = $_SESSION['user_id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image = $_FILES['image']['name']; // Düzenlendi
            $categoryID = $_POST['category_id']; // Düzenlendi
            $poststatus = $_POST['post_status'];
            $blogTitleSeflink = $this->seflink($title);
            $contentSecurity = $this->getSecurity($content);


            if (empty($title) || empty($content) || empty($image)|| empty($categoryID)) { // $email kaldırıldı
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurun';
                $this->view('admin/blogs', $this->data);
                return;
            }

            $targetDir = "view/admin/assets/images/blogs/";
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

            if ($BlogModel->createPost($userID, $title,$blogTitleSeflink,$contentSecurity, $image, $categoryID, $poststatus)) {
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


    public function updateblog($id): void 
    {
                $this->data["title"] = 'Blog Güncelleme Sayfası İçeriği...';
                $BlogModel = new BlogModel();
                $appCategory = new KategoriModel();
                $this->data["CategoryName"] = $appCategory->category();  // kategoriden verileri cekiyor     
                $this->data["post"] = $BlogModel->getBlogById($id);
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'];
                    $userID = $_SESSION['user_id'];
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $categoryID = $_POST['category_id']; // Düzenlendi
                    $poststatus = $_POST['post_status'];
                    $blogTitleSeflink = $this->seflink($title);
                    $contentSecurity = $this->getSecurity($content);
                    $resim = $_FILES['image']['name'];
            
                    $data = [
                        'id' => $id,
                        'user_id' => $userID,
                        'title' => $title,
                        'slug' => $blogTitleSeflink,
                        'content' => $contentSecurity,
                        'category_id' => $categoryID,
                        'post_status' => $poststatus
                    ];
            
                    if (!empty($resim)) {
                        // Mevcut resmi veritabanından al
                        $uploadResult = $this->upload('image', "view/admin/assets/images/blogs/");
                        if ($uploadResult !== false) {
                            $data['image'] = $uploadResult;
            
                            $currentPost = $BlogModel->getBlogById($id);
                            if (!empty($currentPost['image'])) {
                                if (file_exists("view/admin/assets/images/blogs/" . $currentPost['image'])) {
                                    unlink("view/admin/assets/images/blogs/" . $currentPost['image']);
                                }
                            }
            
                            if ($BlogModel->PostsUpdate($data)) {
                                $_SESSION['success_message'] = 'Ayarlar başarıyla güncellendi.';
                                header('Location: /admin/blogs');
                                exit();
                            } else {
                                $_SESSION['warning_message'] = 'Ayarlar güncellenemedi.';
                            }
                        } else {
                            $_SESSION['error_message'] = 'Resim yükleme işleminiz başarısız.';
                            $this->view('/admin/blogs', $this->data);
                            return;
                        }
                    } else {
                        if ($BlogModel->PostsUpdateNull($data)) {
                            $_SESSION['success_message'] = 'Ayarlar başarıyla güncellendi.';
                            header('Location: /admin/blogs');
                            exit();
                        } else {
                            $_SESSION['warning_message'] = 'Ayarlar güncellenemedi.';
                        }
                    }
                }
            }
        
        


            // silme işlemi

            public function deleteBlog($id): void
{
    $BlogModel = new BlogModel();
    
    // Blog kaydını al
    $blog = $BlogModel->getBlogById($id);
    
    if ($blog) {
        // Resim dosyasının yolunu belirleyin
        $imagePath = "view/admin/assets/images/blogs/" . $blog['image'];
        
        // Resim dosyasını sil
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        
        // Blog kaydını sil
        if ($BlogModel->deleteBlogs($id)) {
            // Silme işlemi başarılı ise sayfaya yönlendir
            $_SESSION['success_message'] = 'Blog  başarıyla silindi.';
        } else {
            // Silme işlemi başarısız ise hata mesajı göster
            $_SESSION['error_message'] = 'Blog silme işlemi başarısız.';
        }
    } else {
        // Blog kaydı bulunamadıysa hata mesajı göster
        $_SESSION['error_message'] = 'Blog bulunamadı.';
    }
    
    header('Location: /admin/blogs');
    exit;
}


}