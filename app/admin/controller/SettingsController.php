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

    public function Updatesettings($id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $app = new SettingsModel();

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
                $uploadResult = $this->upload('set_images', "view/admin/assets/images/logo/");
                if ($uploadResult !== false) {
                    $data['set_images'] = $uploadResult;

                    if (!empty($app->ByIdSettings()['set_images'])) {
                        if (file_exists("view/admin/assets/images/logo/" . $app->ByIdSettings()['set_images'])) {
                            unlink("view/admin/assets/images/logo/" . $app->ByIdSettings()['set_images']);
                        }
                    }
                    
                    if ($app->SettingsUpdate($data)) {
                        $_SESSION['success_message'] = 'Ayarlar başarıyla güncellendi.';
                        header('Location: /admin/settings');
                        exit();
                    } else {
                        $_SESSION['warning_message'] = 'Ayarlar güncellenemedi.';
                    }
                } else {
                    $_SESSION['error_message'] = 'Resim yükleme işleminiz başarısız.';
                    $this->view('/admin/settings', $this->data);
                    return;
                }
            } else {
                if ($app->SettingsUpdateNull($data)) {
                    $_SESSION['success_message'] = 'Ayarlar başarıyla güncellendi.';
                    header('Location: /admin/settings');
                    exit();
                } else {
                    $_SESSION['warning_message'] = 'Ayarlar güncellenemedi.';
                }
            }
        }

        $this->view("admin/settings", $this->data);
    }


}
