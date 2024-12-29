<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id and posts.post_status = 1');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdposts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }
    public function HeaderPosts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id and posts.post_status = 1 ORDER BY post_id DESC LIMIT 4 ');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }
    public function HeaderView(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories,users WHERE posts.user_id = users.id and posts.category_id = categories.category_id and posts.post_status = 1 ORDER BY posts.view_count DESC LIMIT 1');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    // public function GetBlogs(string $slug): array
    // {
    //     // Dinamik slug ile sorgu hazırlanıyor


    //     $statement = $this->pdo->prepare("SELECT 
    //         p.post_id,
    //         p.title,
    //         p.category_id AS PostCategoryID,
    //         p.slug AS PostSlug, 
    //         p.content,
    //         p.image,
    //         p.view_count,
    //         c.parent_id,
    //         c.category_id AS CategoryID,
    //         c.name AS CategoryName,
    //         c.slug
    //         FROM posts p
    //         INNER JOIN categories c
    //         ON p.category_id = c.category_id
    //         WHERE p.slug = :slug"); // Slug'a göre filtreleme

    //     // Sorgu çalıştırılıyor
    //     $statement->execute(['slug' => $slug]);

    //     // Tek bir kayıt döndürülüyor
    //     $result = $statement->fetch(\PDO::FETCH_ASSOC);
    //     return $result ?: [];
    // }

    // public function GetBlog(string $slug): array|false
    // {
    //     $statement = $this->pdo->prepare("SELECT 
        
    //     posts.post_id,
    //     posts.title,
    //     posts.category_id AS PostCategoryID,
    //     posts.slug AS PostSlug,
    //     posts.content,
    //     posts.image,
    //     posts.view_count,
    //     categories.parent_id,
    //     categories.category_id,
    //     categories.name,
    //     categories.slug
        
        
    //     FROM posts
        
    //     INNER JOIN categories
    //     ON posts.category_id = categories.category_id
    //     WHERE posts.post_status = 1 AND categories.slug = :slug");

    //     $statement->execute(['slug' => $slug]);
    
    //     $result = $statement->fetch(\PDO::FETCH_ASSOC);
    //     return $result ?: [];
    // }


    public function GetBlog(string $slug): array|false
{
    $statement = $this->pdo->prepare("SELECT posts.*, categories.name as category_name FROM posts INNER JOIN categories ON posts.category_id = categories.category_id WHERE posts.post_status = 1 AND categories.slug = :slug");
    $statement->execute(['slug' => $slug]);

    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result ?: [];
}


    public function Menu(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM categories');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


    // public function Menu(): array|false
    // {
    //     $statement = $this->pdo->query('SELECT 
    //         p.post_id,
    //         p.title,
    //         p.category_id AS PostCategoryID,
    //         p.slug AS PostSlug, 
    //         p.content,
    //         p.image,
    //         p.view_count,
    //         c.parent_id,
    //         c.category_id AS CategoryID,
    //         c.name AS CategoryName,
    //         c.slug AS CategorySlug
    //         FROM posts AS p
    //         INNER JOIN categories AS c
    //         ON p.category_id = c.category_id');
    //     $response = $statement->fetchAll(\PDO::FETCH_ASSOC);


    //     return $response ?: [];


    // if (!$response) {
    //     return false;
    // }

    // Menü yapısını oluştur

    // $menu = [];
    // foreach ($response as $row) {
    //     $categoryId = $row['CategoryID'];
    //     if (!isset($menu[$categoryId])) {
    //         $menu[$categoryId] = [
    //             'name' => $row['CategoryName'],
    //             'sub' => []
    //         ];
    //     }
    //     $menu[$categoryId]['sub'][] = [
    //         'name' => $row['CategoryName'],
    //         'url' => '/detail/' . $row['CategorySlug']
    //     ];
    //     $menu[$categoryId]['sub'][] = [
    //         'name' => $row['title'],
    //         'url' => '/blogs/' . $row['PostSlug']
    //     ];
    // }

    // requrcive function unlimited categories

    // return $menu;
    // }





}
