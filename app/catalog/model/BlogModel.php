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
        $statement = $this->pdo->prepare("SELECT posts.*, categories.name as category_name, posts.slug as post_slug,
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

        $statement = $this->pdo->prepare("SELECT
        c1.name AS category_name,
        c1.slug AS category_slug,
        c2.name AS parent_name,
        c2.slug AS parent_slug,
        p1.title AS post_title,
        p1.slug AS post_slug,
        p1.category_id AS post_category_id,
        p1.image AS post_image,
        p1.view_count,
        p1.created_date_posts


        FROM categories c1
        INNER JOIN categories c2 ON c1.parent_id = c2.category_id
        INNER JOIN posts p1 ON c1.category_id = p1.category_id
        WHERE c2.slug = :slug 
        AND p1.post_status = 1");

        $statement->execute(['slug' => $slug]);
        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result ?: [];
    }

    public function GetBlogsdetail(string $slug): array|false
    {

        $statement = $this->pdo->prepare("SELECT
        c1.name AS category_name,
        c1.slug AS category_slug,
        c1.category_id AS c1_category_id,
        c2.parent_id AS c2_parent_id,
        P1.category_id AS post_category_id,
        p1.title AS post_title,
        p1.post_id AS commentsID,
        p1.slug AS post_slug,
        p1.image AS post_image,
        p1.view_count,
        p1.content AS post_content,
        p1.created_date_posts

        FROM categories c1
        INNER JOIN posts p1 ON c1.category_id = p1.category_id
        LEFT JOIN categories c2 ON c1.parent_id = c2.category_id
        AND p1.post_status = 1
        WHERE p1.slug = :slug");

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
