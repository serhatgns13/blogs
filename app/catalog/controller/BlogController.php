<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BlogModel;
use System\Engine\Controller;

class BlogController extends Controller
{

    public function index(string $slug): void
    {
        $this->data["title"] = 'Blogs Sayfası';

        $this->view("catalog/index", $this->data);

    }

    public function blog(string $slug): void
    {
        $this->data["title"] = 'Blog Sayfası';

        $blogModel = new BlogModel();
        $blog = $blogModel->GetBlog($slug);

        $this->data["SubCategoryBlog"] = $blog;
        $this->view("catalog/blog", $this->data);
    }

    
    public function blogs(string $slug): void
    {
        $this->data["title"] = 'Blogs Sayfası';

        $blogModel = new BlogModel();
        $blog = $blogModel->GetBlogsAll($slug);

        $this->data["MainCategoryBlog"] = $blog;
        
        $this->view("catalog/blogs", $this->data);

    }

    public function detail(string $slug): void
    {
        $this->data["title"] = 'detail';

        $blogModel = new BlogModel();

        $blog = $blogModel->GetBlogsdetail($slug);

        $this->data["BlogDetail"] = $blog;
        
        $this->view("catalog/detail", $this->data);

    }




}
