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

    public function blog(string $slug): void
    {
        $this->data["title"] = 'Blogs Sayfası';

        $blogModel = new BlogModel();
        $blog = $blogModel->GetBlog($slug);

        $this->data["SubCategoryBlog"] = $blog;
        $this->view("catalog/blog", $this->data);
    }


}
