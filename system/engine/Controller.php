<?php

namespace System\Engine;
use App\Catalog\Model\BaseModel;
use App\Catalog\Model\BlogModel;

class Controller
{
    use Response, Request;
    protected $data = null;
    public function __construct()
    {
        if (isset($_SESSION["csrf"])) {
            $this->data["csrf"] = $_SESSION["csrf"];
        } else {
            $this->data["csrf"] = $_SESSION["csrf"] = bin2hex(random_bytes(16));
        }

        $app = new BaseModel();
        $blogApp = new BlogModel();

        $this->data["MenuValue"] = $blogApp->Menu();

        $this->data["SettingsValue"] = $app->settings();

        
    }

    public function view(string $path, array $data = []): void
    {
        $view = APP_ROOT . '/view/' . mb_strtolower($path, 'UTF-8') . '.php';
        if (file_exists($view)) {
            extract($data);
            require_once($view);
        } else {
            throw new \Exception("view dosyası bulunamadı : " . $view);
        }
    }


    public function getSecurity($data)
    {
        if (is_array($data)) {

            $varible = array_map('htmlspecialchars', $data);
            $response = array_map('stripslashes', $varible);
            $respon = str_replace(["INSERT", "DELETE", "UPDATE", "delete", "insert", "update", "JOIN", "SHOW", "DECLARE", "ALTER", "CREATE", "ADD"], " ", $response);
            return $respon;
        } else {

            $varible = htmlspecialchars($data);
            $response = stripslashes($varible);
            $respon = str_replace(["INSERT", "DELETE", "UPDATE", "delete", "insert", "update", "JOIN", "SHOW", "DECLARE", "ALTER", "CREATE", "ADD"], " ", $response);
            return $respon;
        }
    }

    public function seflink($val)
    {
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '?', '*', '!', '.', '(', ')');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '', '', '', '', '', '');
        $string = strtolower(str_replace($find, $replace, $val));
        $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = str_replace(' ', '-', $string);
        return $string;
    }


    public function upload($img, $list)
    {
        $input = $img;
        $klasor = rtrim($list, '/') . '/';
        $target_dir = $klasor;

        // Dosya bilgilerini al
        $fileName = basename($_FILES[$input]["name"]);
        $fileTmpName = $_FILES[$input]["tmp_name"];
        $fileSize = $_FILES[$input]["size"];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Benzersiz dosya adı oluştur
        $uniqueName = uniqid('', true) . '.' . $fileType;
        $target_file = $target_dir . $uniqueName;

        // Dosya türü kontrolü
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedTypes)) {
            $_SESSION['error_message'] = "Hata: Sadece JPG, JPEG, PNG ve GIF dosyaları yüklenebilir.";
            return;
        }

        // Dosya boyutu kontrolü (örneğin 5MB)
        if ($fileSize > 5000000) {
            $_SESSION['error_message'] = "Hata: Dosya boyutu 5MB'ı geçemez.";
            return;
        }

        // Resmin gerçek bir resim olup olmadığını kontrol et
        $check = getimagesize($fileTmpName);
        if ($check === false) {
            $_SESSION['error_message'] = "Hata: Dosya bir resim değil.";
            return;
        }

        // Dosyayı yükle
        if (move_uploaded_file($fileTmpName, $target_file)) {
            return $uniqueName;
        } else {
            $_SESSION['error_message'] = "Hata: Dosya yüklenirken bir hata oluştu.";
            return;
        }
    }


    function formatDateInTurkish($date)
    {
        setlocale(LC_TIME, 'tr_TR.UTF-8');
        $formatter = new \IntlDateFormatter('tr_TR', \IntlDateFormatter::LONG, \IntlDateFormatter::NONE);
        return $formatter->format(new \DateTime($date));
    }

    public function securitySetHash($data)
    {
        $options = [
            'cost' => 12
        ];
        $new_password = password_hash($data, PASSWORD_DEFAULT, $options);
        return $new_password;
    }

function timeConvert($zaman) {
    date_default_timezone_set('Europe/Istanbul'); // Türkiye için zaman dilimi

    // Tarih formatını kontrol et
    $zaman = strtotime($zaman);
    if ($zaman === false) {
        return 'Geçersiz tarih formatı';
    }

    $zaman_farki = time() - $zaman;

    // Negatif zaman farkını önle
    if ($zaman_farki < 0) {
        return 'Gelecekteki bir tarih';
    }

    if ($zaman_farki < 60) {
        return $zaman_farki . ' saniye önce';
    } else if ($zaman_farki < 3600) {
        $dakika = floor($zaman_farki / 60);
        return $dakika . ' dakika önce';
    } else if ($zaman_farki < 86400) {
        $saat = floor($zaman_farki / 3600);
        return $saat . ' saat önce';
    } else if ($zaman_farki < 604800) {
        $gun = floor($zaman_farki / 86400);
        return $gun . ' gün önce';
    } else if ($zaman_farki < 2419200) {
        $hafta = floor($zaman_farki / 604800);
        return $hafta . ' hafta önce';
    } else if ($zaman_farki < 29030400) {
        $ay = floor($zaman_farki / 2419200);
        return $ay . ' ay önce';
    } else {
        $yil = floor($zaman_farki / 29030400);
        return $yil . ' yıl önce';
    }
}


}
