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




}
