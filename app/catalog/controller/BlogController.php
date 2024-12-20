<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{
  
    public function index(): void
    {
        $this->data["title"] = 'Blog Sayfası...';

        $app = new BlogModel();
        $this->data["posts"] = $app->posts(); // çoklu veri çekme
        $this->data["ByIdpost"] = $app->ByIdposts(); // tekli veri çekme 

        $this->view("catalog/blogs", $this->data);
    }
}
