<?php

namespace App\Admin\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdposts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function createPost($user_id,$blogTitle,$blogContent,$blogİmages,$categoryID,$blogPostStatus): bool
    {
        $sql = "INSERT INTO posts (user_id, title, content, image, category_id, post_status) 
                VALUES (:user_id, :title, :content, :image, :category_id, :post_status)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':user_id' => $user_id,
            ':title' => $blogTitle,
            ':content' => $blogContent,
            ':image' => $blogİmages,
            ':category_id' => $categoryID,
            ':post_status' => $blogPostStatus
        ]);
    }



    public function Blog($title): bool
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM posts WHERE title = :title');
        $statement->execute([
            ':title' => $title
        ]);
        return $statement->fetchColumn() > 0;
    }



}
