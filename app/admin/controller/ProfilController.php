<?php

namespace App\Admin\Controller;



use App\Admin\Model\ProfilModel;
use System\Engine\Controller;

class ProfilController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Profilim';

        $app = new ProfilModel();
         // $this->data["users"] = $app->users(); // çoklu veri çekme
         $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/profil", $this->data);
    }



    public function profilUpdate($id): void
    {
       
       if ($_SERVER['REQUEST_METHOD'] == 'POST') {
           $id = $_POST['id'];
           $user_name = $_POST['user_name'];
           $email = $_POST['email'];
           $password = $_POST['password'];
          
           $app = new ProfilModel();
           $hashedPassword = $this->securitySetHash($password);
            if ($app->ByIdusersUpdate($id, $user_name, $email, $hashedPassword)) {
            $_SESSION['success_message'] = 'Profil başarıyla güncellendi.';
            header('Location: /admin/profil');
            exit;
            }else {
                // Güncelleme başarısız, hata mesajı göster
                $_SESSION['error_message'] = 'Profil Güncelleme Başarısız.';
            }
          
           
       }
       $this->view('admin/profil', $this->data);
    }





}
