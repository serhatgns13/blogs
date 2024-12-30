<?php

namespace App\Admin\Controller;

use App\Admin\Model\PrivacyModel;
use System\Engine\Controller;

class PrivacyController extends Controller
{
    public function index(): void
    {
        $this->data["title"] = 'Gizlilik Sayfası';
        $privacyModel = new PrivacyModel(); 
        $this->data["privacyPolicies"] = $privacyModel->privacyNew(); // Gizlilik politikaları verisini çekme
        $this->view("admin/privacy", $this->data);
    }

    public function createPrivacy(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $privacyModel = new PrivacyModel(); 

            // Formdan gelen verileri alalım
            $newTitle = $this->getsecurity($_POST['title']); 
            $newContent = $this->getsecurity($_POST['content']); 

            // Alanların boş olup olmadığını kontrol et
            if (empty($newTitle) || empty($newContent)) {
                $_SESSION['warning_message'] = 'Tüm alanları doldurun';
                $this->view('admin/privacy', $this->data);
                return;
            }

            // Aynı başlıkta başka bir gizlilik politikası olup olmadığını kontrol et
            if ($privacyModel->privacyExists($newTitle)) {
                $_SESSION['warning_message'] = 'Aynı isim mevcut';
                $this->view('admin/privacy', $this->data);
                return;
            }

            // Yeni gizlilik politikası ekleme
            if ($privacyModel->create($newTitle, $newContent)) {
                $_SESSION['success_message'] = 'Gizlilik Politikası başarıyla eklendi';
                header('Location: /admin/privacy');
                exit;
            } else {
                $_SESSION['error_message'] = 'Kayıt başarısız';
            }
        }
    }

    public function updatePrivacy(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $privacyModel = new PrivacyModel(); 

            // Formdan gelen verileri alalım
            $id = $this->getsecurity($_POST['privacy_id']);
            $newTitle = $this->getsecurity($_POST['title']); 
            $newContent = $this->getsecurity($_POST['content']); 

            // Güncelleme işlemini gerçekleştirelim
            if ($privacyModel->updatePrivacy($id, $newTitle, $newContent)) {
                $_SESSION['success_message'] = 'Güncelleme başarılı';
                header('Location: /admin/privacy');
                exit;
            } else {
                $_SESSION['error_message'] = 'Güncelleme başarısız';
            }
        }
    }

    public function deletePrivacy($id): void
    {
        $privacyModel = new PrivacyModel(); 
        $id = $this->getsecurity($id); 

        // Silme işlemini yapalım
        if ($privacyModel->deletePrivacy($id)) {
            $_SESSION['success_message'] = 'Silme işlemi başarılı';
        } else {
            $_SESSION['error_message'] = 'Silme işlemi başarısız';
        }
        header('Location: /admin/privacy');
        exit;
    }


}
