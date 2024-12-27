<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdposts(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }
    public function HeaderPosts(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id ORDER BY post_id DESC LIMIT 4');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }
    public function HeaderView(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts,categories WHERE posts.category_id = categories.category_id ORDER BY view_count DESC LIMIT 1');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

}
