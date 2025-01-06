<?php

namespace App\Admin\Controller;

use App\Admin\Model\CommentsModel;
use System\Engine\Controller;

class CommentsController extends Controller
{
    public function index(): void
    {
        $this->data["title"] = 'Yorumlar Sayfası';

        $commentsModel = new CommentsModel();
        $comments = $commentsModel->CommentsListe();
        $this->data["CommentsValue"] = $comments;

        $this->view("admin/comments", $this->data);
    }


    public function ReplyadminAdd(): void
    {

        $app = new CommentsModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $reply_userID = $_POST['reply_userID'];
            $reply_name = $_SESSION['user_name'];
            $reply_content = $_POST['reply_content'];
            $reply_status = 1;


            if (empty($reply_content)) {
                $_SESSION['seccess_message'] = 'Lütfen tüm alanları doldurun';
                $this->view('admin/comments', $this->data);
                return;
            }

            if ($app->ReplyadminModul($reply_userID, $reply_name, $reply_content, $reply_status)) {

                $_SESSION['seccess_message'] = 'Yorum başarıyla eklendi';
                $this->view('admin/comments', $this->data);
                return;
            } else {
                $_SESSION['error_message'] = 'Yorum eklenirken bir hata oluştu';
            }

            $this->view("admin/comments", $this->data);

        }
    }

    public function replyadminEdit($id): void
    {
        $app = new CommentsModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $id = $_POST['reply_userID'];
            $reply_content = $_POST['reply_content'];
            $reply_status = 1;
            $comment_status = $_POST['comment_status'];
            $user_id = $_POST['user_id'] ?? null;
            $reply_name = $_SESSION['user_name'];


            if ($app->ReplyadminModalEdit($id, $reply_name, $reply_content, $reply_status, $comment_status, $user_id)) {
                $_SESSION['success_message'] = 'Yorum başarıyla güncellendi';
            } else {
                $_SESSION['error_message'] = 'Yorum güncellenirken bir hata oluştu';
            }

            $this->view("admin/comments", $this->data);
        }
    }

    public function deleteComments(int $id): void
    {
        $commentsModel = new CommentsModel();

        if ($commentsModel->deleteCommentAndReplies($id)) {
            $_SESSION['success_message'] = 'Yorum başarıyla silindi.';
        } else {
            $_SESSION['error_message'] = 'Yorum silinirken bir hata oluştu.';
        }

        $this->view("admin/comments", $this->data);
    }






}
