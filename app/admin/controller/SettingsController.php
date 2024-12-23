<?php

namespace App\Admin\Controller;



use App\Admin\Model\SettingsModel;
use System\Engine\Controller;

class SettingsController extends Controller
{
    public function index(): void
    {
        $this->data["title"] = 'Ayarlar Sayfası...';

        $app = new SettingsModel();

        $this->data["settingsValue"] = $app->ByIdSettings();

        $this->view("admin/settings", $this->data);
    }

    public function Updatesettings(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['set_id'];
            $title = $_POST['set_title'];
            $description = $_POST['set_description'];
            $keywords = $_POST['set_keywords'];
            $author = $_POST['set_author'];
            $email = $_POST['set_email'];
            $resim = $_FILES['set_images']['name'];

            $data = [
                'set_id' => $id,
                'set_title' => $title,
                'set_description' => $description,
                'set_keywords' => $keywords,
                'set_author' => $author,
                'set_email' => $email
            ];

            if (!empty($resim)) {
                $images = $this->upload("set_images", "view/admin/assets/images/logo/");
                if ($images !== false) {
                    $data['set_images'] = $images;
                    $app = new SettingsModel();
                    $result = $app->SettingsUpdate($data);
                } else {
                    $_SESSION['message'] = 'Resim yükleme işleminiz başarısız.';
                    $this->view("admin/settings", $this->data);
                    return;
                }
            } else {
                $app = new SettingsModel();
                $result = $app->SettingsUpdateNull($data);
            }

            if ($result) {
                $_SESSION['message'] = 'Ayarlar başarıyla güncellendi.';
                header('Location: /admin/settings');
            } else {
                $_SESSION['message'] = 'Ayarlar güncellenemedi.';
            }
        }

        $this->view("admin/settings", $this->data);
    }

}
