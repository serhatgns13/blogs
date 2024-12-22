<?php

namespace App\Admin\Controller;


use App\Admin\Model\LoginModel;
use System\Engine\Controller;

use App\Admin\Controller\AdminController;

class LoginController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Login Sayfası...';

        $app = new LoginModel();
        // $this->data["posts"] = $app->users(); // çoklu veri çekme
        // $this->data["ByIdLogin"] = $app->ByIdLogin(); // tekli veri çekme 

        $this->view("admin/login", $this->data);
    }

    public function login(): void
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $app = new LoginModel();
        $user = $app->ByIdLogin($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['role_id'] = $user['role_id'];
            header('Location: /admin');
            exit();
        }

        $this->data['error'] = 'Kullanıcı adı veya şifre hatalı';
        $this->view("admin/login", $this->data);
    }

    public function admin(): void
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /admin/login');
            exit();
        }

        // Admin sayfası içeriği burada yer alacak
        $this->view("admin", $this->data);
    }


    public function logout(): void
    {
        session_start();
        ob_start();
        session_destroy();
        header('Location: /admin/login');
        exit();
    }

}
