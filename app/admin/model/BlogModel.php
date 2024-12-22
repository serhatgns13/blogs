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

    public function createPost(array $data): bool
    {
        $sql = "INSERT INTO blogs (user_id, title, content, image, post_status) 
                VALUES (:user_id, :title, :content, :image, :post_status)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':user_id' => $_SESSION['user_id'],
            ':title' => $data['title'],
            ':content' => $data['content'],
            ':image' => $data['image'],
            ':post_status' => $data['post_status']
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
