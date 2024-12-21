<?php

namespace App\Admin\Controller;



use App\Admin\Model\BaseModel;
use System\Engine\Controller;

class BaseController extends Controller
{

    public function __construct()
    {
        $this->requireAuthentication();
    }

    public function index(): void
    {
        $this->data["title"] = 'Admin Sayfası...';

        // $app = new BaseModel();
        //  $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/index", $this->data);
    }

    private function startSession(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    private function isAuthenticated(): bool
    {
        return isset($_SESSION['user_id']);
    }


    public function requireAuthentication(): void
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /admin/login');
            exit();
        }
    }


}
