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



    public function GetBlog(string $slug): array|false
    {
        $statement = $this->pdo->prepare("SELECT posts.*, categories.name as category_name,
        (SELECT COUNT(*) FROM posts WHERE posts.category_id = categories.category_id AND posts.post_status = 1) as post_count
        FROM posts
        INNER JOIN categories ON posts.category_id = categories.category_id
        WHERE posts.post_status = 1
        AND categories.slug = :slug");

        $statement->execute(['slug' => $slug]);

        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result ?: [];
    }

  

    public function GetBlogsAll(string $slug): array|false
    {
        $statement = $this->pdo->prepare("SELECT posts.*, categories.name as category_name,
        (SELECT COUNT(*) FROM posts WHERE posts.category_id = categories.category_id AND posts.post_status = 1) as post_count
        FROM posts
        INNER JOIN categories ON posts.category_id = categories.category_id
        WHERE posts.post_status = 1
        AND categories.slug = :slug");

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



}
