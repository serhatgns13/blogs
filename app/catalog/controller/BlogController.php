<?php

namespace App\Catalog\Controller;

use App\Catalog\Model\CommentsModel;
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
        $commentsModel = new CommentsModel();

        $blog = $blogModel->GetBlogsDetail($slug);

        $this->data["BlogDetail"] = $blog;

        $comments = $commentsModel->CommentsList($slug);
        $this->data["CommentsValue"] = $comments;

        $blogModel->view_count($slug);

        $this->view("catalog/detail", $this->data);
    }




    public function CommentsAdd(string $slug): void
    {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['content']) && !empty($_POST['post_id']) && !empty($_POST['user_id'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $content = $_POST['content'];
            $post_id = $_POST['post_id'];
            $user_id = $_POST['user_id'];
            $comment_status = 2;

            $commentsModel = new CommentsModel();
            $commentsModel->CommentsAdd($name, $email, $content, $post_id, $user_id, $comment_status);

            $_SESSION['success_message'] = 'Yorum başarıyla eklendi';
            header("Location: /detail/$slug");
            return;

        } else {
            $_SESSION['error_message'] = 'Yorum başarısız. Lütfen tüm alanları doldurunuz.';
            header("Location: /detail/$slug");

            return;
        }
    }









}
