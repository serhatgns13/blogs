<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{

    public function index(string $slug = null): void
    {
        $this->data["title"] = 'Blog Sayfası...';

        $app = new BlogModel();



        $slug = $app->GetIDBlog();
        $this->data["GetBlogValue"] = $slug;

        $this->view("catalog/blog", $this->data);
    
    }


}
