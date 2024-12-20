<?php

namespace App\Admin\Controller;


use App\Admin\Model\LoginModel;
use System\Engine\Controller;

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
}
