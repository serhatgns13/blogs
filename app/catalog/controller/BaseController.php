<?php

namespace App\Catalog\Controller;

use App\Catalog\Model\BlogModel;
use App\Catalog\Model\BaseModel;
use App\Catalog\Model\CategoriesModel;
use System\Engine\Controller;

class BaseController extends Controller
{
    public function index(): void
    {
        
        $app = new BaseModel();
        $blogApp =new BlogModel();
        $category = new CategoriesModel();

        $Category = $category->categories();
        $this->data["CategoryValue"] = $Category;
        $this->data["posts"] = $blogApp->posts(); // çoklu veri çekme
        $this->data["HeaderPosts"] = $blogApp->HeaderPosts(); // çoklu veri çekme
        $this->data["HeaderView"] = $blogApp->HeaderView(); // çoklu veri çekme
        $Settings = $app->settings();
        $this->data["SettingsValue"] = $Settings;
        $this->view("catalog/index", $this->data);
    }
}
