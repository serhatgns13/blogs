<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BlogModel;
use App\Catalog\Model\BaseModel;
use System\Engine\Controller;

class BaseController extends Controller
{
    public function index(): void
    {

        $app = new BaseModel();
        $blogApp = new BlogModel();

        $this->data["posts"] = $blogApp->posts();
        $this->data["HeaderPosts"] = $blogApp->HeaderPosts();
        $this->data["HeaderView"] = $blogApp->HeaderView();
       
       

        $this->data["MenuValue"] = $blogApp->Menu();

        $this->data["SettingsValue"] = $app->settings();

        $this->view("catalog/index", $this->data);
    }
}
