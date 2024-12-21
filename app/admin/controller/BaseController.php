<?php

namespace App\Admin\Controller;



use App\Admin\Model\BaseModel;
use System\Engine\Controller;

class BaseController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Admin Sayfası...';

        // $app = new BaseModel();
        //  $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/index", $this->data);
    }
}
