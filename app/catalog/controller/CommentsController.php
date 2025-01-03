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

    public function CommentsCreate(): void
    {

        $app = new CommetsModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post_id = $_POST['post_id'];
            $name = $this->getSecurity($_POST['name']);
            $email = $this->getSecurity($_POST['email']);
            $content = $this->getSecurity($_POST['content']);
            $commetsstatus = $_POST['commets_status'];

            if (empty($name) || empty($email) || empty($content)) {
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurun';
                $this->view('admin/yorumlar', $this->data);
                return;
            }

            $app->CommentsAdd($post_id, $name, $email, $content, $commetsstatus);
            $_SESSION['success_message'] = 'Yorum başarıyla eklendi';
            header('Location: /admin/yorumlar');
            return;

        }


        $this->view("catalog/detail", $this->data);
    }

    



}
