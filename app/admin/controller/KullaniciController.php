<?php

namespace App\Admin\Controller;

use App\Admin\Model\KullaniciModel;
use System\Engine\Controller;

class KullaniciController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Admin Sayfası...';
        $app = new KullaniciModel;
        // $app = new BaseModel();
         $this->data["users"] = $app->users(); // çoklu veri çekme
        //  $this->data["ByIdusers"] = $app->ByIdusers(); // tekli veri çekme 

        $this->view("admin/kullanici", $this->data);
    }
}
