<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id');
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
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id ORDER BY post_id DESC LIMIT 4');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }
    public function HeaderView(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id ORDER BY view_count DESC LIMIT 1');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


    public function GetIDBlog(): array|false
    {
        $statement = $this->pdo->query('SELECT 
        posts.post_id,
        posts.title,
        posts.slug,
        posts.content,
        posts.image,
        posts.category_id AS postCategoryID,
        posts.view_count,
        
        categories.category_id AS categoryID,
        categories.parent_id,
        categories.name
        FROM 
            posts
        INNER JOIN 
            categories 
        ON 
            posts.category_id = categories.category_id;
        ');

        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


   


    public function Menu(): array|false
    {
        $statement = $this->pdo->query('SELECT 
        p.post_id,
        p.title,
        p.category_id AS PostCategoryID,
        p.slug AS PostSlug, 
        p.content,
        p.image,
        p.view_count,
        c.parent_id,
        c.category_id AS CategoryID,
        c.name AS CategoryName,
        c.slug AS CategorySlug

        FROM posts AS p
        INNER JOIN categories AS c
        ON p.category_id = c.category_id');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }



}
