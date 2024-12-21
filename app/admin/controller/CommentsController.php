<?php

namespace App\Admin\Controller;

use App\Admin\Model\CommentsModel;
use System\Engine\Controller;

class CommentsController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Admin Sayfası...';

        //  $app = new CommentsModel;
        //  $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/yorumlar", $this->data);
    }
}
