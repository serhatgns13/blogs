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

    public function createAdd(): void
    {
        $blogModel = new BlogModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                $_POST['title']
            ];

            $response = $blogModel->createPost($data);

            if ($response) {
                echo 'Başarılı';
            } else {
                echo 'Başarısız';
            }
        }
        $this->view("admin/createAdd", $this->data);
    }

    public function updateAdd(): void
    {
        $blogModel = new BlogModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                $_POST['title']
            ];

            $response = $blogModel->updatePost($data);

            if ($response) {
                echo 'Başarılı';
            } else {
                echo 'Başarısız';
            }
        }
        $this->view("admin/updateAdd", $this->data);
    }
}
