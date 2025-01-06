<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\CommetsModel;
use System\Engine\Controller;

class CommetsController extends Controller
{
    public function index(): void
    {

     
        $this->view("catalog/detail", $this->data);
    }




}
