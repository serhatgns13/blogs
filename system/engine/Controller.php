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

    public function upload($img, $list)
    {
        $input = $img;
        $klasor = $list;
        $target_dir = $klasor;

        $target_file = $target_dir . basename($_FILES[$input]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename = uniqid();
        $extension = pathinfo($_FILES[$input]["type"] == "png" || $_FILES[$input]["type"] == "jpeg" || $_FILES[$input]["type"] == "jpg" || $_FILES[$input]["type"] == "gif", PATHINFO_EXTENSION);
        $basename = $filename . $extension . "." . $imageFileType;
        $yeniyol = $target_dir . $basename;
        move_uploaded_file($_FILES[$input]["tmp_name"], $yeniyol);
        return $basename;
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

    function DataFormat($format, $datetime = 'now')
    {
        $z = date("$format", strtotime($datetime));
        $gun_dizi = array(
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
            'Sunday' => 'Pazar',
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
            'Mon' => 'Pts',
            'Tue' => 'Sal',
            'Wed' => 'Çar',
            'Thu' => 'Per',
            'Fri' => 'Cum',
            'Sat' => 'Cts',
            'Sun' => 'Paz',
            'Jan' => 'Oca',
            'Feb' => 'Şub',
            'Mar' => 'Mar',
            'Apr' => 'Nis',
            'Jun' => 'Haz',
            'Jul' => 'Tem',
            'Aug' => 'Ağu',
            'Sep' => 'Eyl',
            'Oct' => 'Eki',
            'Nov' => 'Kas',
            'Dec' => 'Ara',
        );
        foreach ($gun_dizi as $en => $tr) {
            $z = str_replace($en, $tr, $z);
        }
        if (strpos($z, 'Mayıs') !== false && strpos($format, 'F') === false)
            $z = str_replace('Mayıs', 'May', $z);
        return $z;
    }


}
