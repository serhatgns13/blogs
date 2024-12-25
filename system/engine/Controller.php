<?php

namespace System\Engine;

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
    
    public function  securitySetHash( $data ) {
        $options = [
            'cost' => 12
        ];
        $new_password = password_hash( $data, PASSWORD_DEFAULT, $options );
        return $new_password;
    }

}
