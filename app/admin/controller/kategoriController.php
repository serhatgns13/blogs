<?php

namespace App\Admin\Controller;

use App\Admin\Model\kategoriModel;
use System\Engine\Controller;

class KategoriController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Kategori Sayfası...';

        // $app = new CategoryModel();
        //  $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/kategori", $this->data);
    }
}
