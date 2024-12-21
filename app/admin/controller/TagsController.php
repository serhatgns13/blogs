<?php

namespace App\Admin\Controller;


use App\Admin\Model\TagsModel;
use System\Engine\Controller;

class TagsController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Etiket Sayfası...';

        // $app = new BaseModel();
        //  $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/tags", $this->data);
    }
}
