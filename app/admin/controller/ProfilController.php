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
}
