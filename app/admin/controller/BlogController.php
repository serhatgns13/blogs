<?php

namespace App\Admin\Controller;


use App\Admin\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Blog Sayfası İçeriği...';

        $app = new BlogModel();
        $this->data["posts"] = $app->posts(); // çoklu veri çekme
        $this->data["ByIdpost"] = $app->ByIdposts(); // tekli veri çekme 

        $this->view("admin/blogs", $this->data);
    }
}
