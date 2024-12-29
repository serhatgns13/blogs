<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Blog Sayfası...';



        $this->view("catalog/index", $this->data);

    }


    public function blogs(string $slug = null): void
    {
        $this->data["title"] = 'Blogs Sayfası...';

        $app = new BlogModel();

        $slug = $app->GetIDBlog();

        $this->data["GetBlogs"] = $slug;

        $this->view("catalog/blogs", $this->data);

    }



}
