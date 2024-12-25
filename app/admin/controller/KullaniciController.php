<?php

namespace App\Admin\Controller;

use App\Admin\Model\KullaniciModel;
use System\Engine\Controller;

class KullaniciController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Kullanıcı Sayfası...';
        $app = new KullaniciModel;
        $this->data["usersvariable"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/kullanici", $this->data);
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['user_name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $role_id = $_POST['role_id'] ?? '';
            $userstatus = $_POST['user_status'] ?? '';

            if (empty($username) || empty($email) || empty($password)) {
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurun';
                $this->view('/admin/kullanici', $this->data);
                return;
            }

            $kullaniciModel = new KullaniciModel();

            // Kullanıcı adı veya e-posta adresi zaten var mı kontrol et
            if ($kullaniciModel->userExists($username, $email)) {
                $_SESSION['warning_message'] = 'Kullanıcı adı veya e-posta adresi zaten mevcut';
                $this->view('/admin/kullanici', $this->data);
                return;
            }

            if ($kullaniciModel->registerUser($username, $email, $password, $role_id, $userstatus)) {
                // Kayıt başarılı, kullanıcıyı yönlendir
                $_SESSION['success_message'] = 'Kullanıcı başarıyla kaydedildi.';
                header('Location: /admin/kullanici');
                exit();
            } else {
                // Kayıt başarısız, hata mesajı göster
                $_SESSION['error_message'] = 'Kayıt başarısız';
            }
        }

        $this->view('admin/kullanici', $this->data);
    }

    public function update($id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username =  $this->getSecurity($_POST['user_name']) ;
            $email =$this->getSecurity($_POST['email']);
            $password = $_POST['password'];
            $role_id = $_POST['role_id'];
            $userstatus = $_POST['user_status'];
            
            

            $kullaniciModel = new KullaniciModel();           

            if ($kullaniciModel->updateUser($id, $username, $email, $password, $role_id, $userstatus)) {
                // Güncelleme başarılı, kullanıcıyı yönlendir
                $_SESSION['success_message'] = 'Kullanıcı başarıyla Güncellendi.';
                header('Location: /admin/kullanici');
                exit();
            } else {
                // Güncelleme başarısız, hata mesajı göster
                $this->data['error'] = 'Güncelleme işlemi başarısız';
            }
        }

        $this->view('admin/kullanici', $this->data);
    }

    public function delete($id): void
    {
        $kullaniciModel = new KullaniciModel();

        if ($kullaniciModel->deleteUser($id)) {
            // Silme başarılı, kullanıcıyı yönlendir
            $_SESSION['success_message'] = 'Kullanıcı başarıyla silindi.';
        } else {
            // Silme başarısız, hata mesajı göster
            $_SESSION['error_message'] = 'Kullanıcı silme işlemi başarısız.';
        }

        header('Location: /admin/kullanici');
        exit();
    }

    

}
