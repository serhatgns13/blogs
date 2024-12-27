<?php

namespace App\Catalog\Controller;


use App\Catalog\Model\BaseModel;
use App\Catalog\Model\CategoriesModel;
use System\Engine\Controller;

class BaseController extends Controller
{
    public function index(): void
    {
        
        $app = new BaseModel();

        $category = new CategoriesModel();

        $Category = $category->categories();
        $this->data["CategoryValue"] = $Category;

        $Settings = $app->settings();
        $this->data["SettingsValue"] = $Settings;

        $this->view("catalog/index", $this->data);
    }
}
