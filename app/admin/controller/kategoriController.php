<?php

namespace App\Admin\Controller;

use App\Admin\Model\kategoriModel;
use System\Engine\Controller;

class KategoriController extends Controller
{

    public function index(): void
    {
        $this->data["title"] = 'Kategori Sayfası...';

        $app = new KategoriModel;
        $this->data["categoryvariable"] = $app->category(); // çoklu veri çekme
        //  $this->data["ByIdCategories"] = $app->ByIdCategories(); // tekli veri çekme 

        $this->view("admin/kategori", $this->data);


    }

    public function createKategori(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $kategoriModel = new KategoriModel();

            $categoryName = $this->getSecurity($_POST['name']);
            $categorySlug = $this->seflink($categoryName);
            $categoryParentid = $_POST['parent_id'];
            $categoryStatus = $_POST['category_status'];

            if (empty($categoryName)) {
                $_SESSION['warning_message'] = 'Lütfen tüm alanları doldurunuz';
                $this->view('admin/kategori', $this->data);
                return;
            }

            if ($kategoriModel->kategoriExists($categoryName)) {
                $_SESSION['warning_message'] = 'Aynı Kategoriden İsim Mevcuttur';
                $this->view('admin/kategori', $this->data);
                return;
            }
           

            if ($kategoriModel->creat($categoryName, $categorySlug,$categoryParentid, $categoryStatus)) {
                
                // kayıt başarılı ise sayfaya yönlendir
                $_SESSION['success_message'] = 'Kategori Başarılı Bir Şekilde Eklendi';

                header('Location: /admin/kategori');
                return;

            } else {
                $_SESSION['error_message'] = 'kayıt Başarısız';
            }
        }

        $this->view('admin/kategori', $this->data);
    }



    // Kategori Güncelleme İşlemleri

    public function updateKategori($id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kategoriModel = new KategoriModel();

            $id = $_POST['category_id'];
            $categoryName = $this->getSecurity($_POST['name']);
            $categorySlug = $this->seflink($categoryName);
            $categoryStatus = $_POST['category_status'];


            if ($kategoriModel->update($id, $categoryName, $categorySlug, $categoryStatus)) {
                $_SESSION['success_message'] = 'Kategori güncelleme başarılı';
                header('Location: /admin/kategori');
                exit;
            } else {
                $_SESSION['error_message'] = 'Kategori güncelleme başarısız';
                $this->data['error'] = 'Kategori güncelleme başarısız';
            }
        }
        $this->view('admin/kategori', $this->data);
    }



    // Kategori Silme İşlemleri
    public function deleteKategori($id): void
    {
        $kategoriModel = new KategoriModel();
        if ($kategoriModel->deleteCategory($id)) {
            // silme İşlemi Başarılı ise sayfaya yönlendir
            $_SESSION['success_message'] = 'Kategori Silme İşlemi Başarılı';
        } else {
            // silme İşlemi Başarısız ise sayfaya yönlendir
            $_SESSION['error_message'] = 'Kategori Silme İşlemi Başarısız';
        }
        header('Location: /admin/kategori');
        exit;
    }
}
