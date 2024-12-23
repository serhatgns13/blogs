<?php

namespace App\Admin\Controller;

use App\Admin\Model\TagsModel;
use System\Engine\Controller;

class TagsController extends Controller
{
    public function index(): void
    {
        $this->data["title"] = 'Tags Sayfası...';

        $app = new TagsModel;
        $this->data["ticketvariable"] = $app->tagsTicket(); // çoklu veri çekme
        //  $this->data["ByIdTags"] = $app->ByIdTags(); // tekli veri çekme 

        $this->view("admin/tags", $this->data);
        
        
    }


    public function creatTags(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $tagsModel = new TagsModel();

            $ticketName = $_POST['blog_title'];
            $ticketSlug = $this->seflink($ticketName);

            if (empty($ticketName)) {
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurunuz';
                $this->view('admin/tags', $this->data);
                return;
            }

            if ($tagsModel->tagsExists($ticketName)) {
                $_SESSION['warning_message'] = 'Aynı Tagstan İsim Mevcuttur';
                $this->view('admin/tags', $this->data);
                return;
            }

            if ($tagsModel->creat($ticketName, $ticketSlug)) {
                $_SESSION['success_message'] = 'Tags Başarılı Bir Şekilde Eklendi';
                header('Location: /admin/tags');
                exit();
            } else {
                $_SESSION['error_message'] = 'Kayıt Başarısız';
            }
        }

        $this->view('admin/tags', $this->data);
    }

    public function updateTags($id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tagsModel = new TagsModel();

            $id = $_POST['tags_id'];

            $ticketName = $_POST['name'];
            $ticketSlug = $this->seflink($ticketName);
            $ticketName = $this->getSecurity($_POST['name']) ;
            $ticketSlug = $tagsModel->seflink($ticketName);


            if ($tagsModel->update($id, $ticketName, $ticketSlug)) {
                $_SESSION['success_message'] = 'Tags güncelleme başarılı';
                header('Location: /admin/tags');
                exit('Yönlendiriliyor...');
            } else {
                $_SESSION['error_message'] = 'Tags güncelleme başarısız';
                $this->data['error'] = 'Tags güncelleme başarısız';
            }
        }
        $this->view('admin/tags', $this->data);
    }

    public function deleteTags($id): void
    {
        $tagsModel = new TagsModel();
        if ($tagsModel->deleteTicket($id)) {
            $_SESSION['success_message'] = 'Tags Silme İşlemi Başarılı';
        } else {
            $_SESSION['error_message'] = 'Tags Silme İşlemi Başarısız';
        }
        header('Location: /admin/tags');
        exit('Yönlendiriliyor...');
    }
}
