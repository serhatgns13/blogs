<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class CommetsModel extends Model
{

    public function CommentsAdd(string $name, string $email, string $comment, int $post_id): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO comments (name, email, comment, post_id) VALUES (:name, :email, :comment, :post_id)');
        $response = $statement->execute([
            'name' => $name,
            'email' => $email,
            'comment' => $comment,
            'post_id' => $post_id
        ]);

        return $response;
    }


    public function CommentsList(int $post_id): array
    {
        $statement = $this->pdo->prepare('SELECT
        p1.post_id AS postID,
        u1.id AS userID,
        c1.post_id,
        c1.name,
        c1.email,
        c1.content,
        c1.reply,
        c1.created_date

        FROM comments c1
        INNER JOIN posts p1 ON c1.post_id = p1.post_id
        INNER JOIN users u1 ON c1.user_id = u1.id
        AND c1.comment_status = 1
        WHERE c1.post_id = :post_id');
        $statement->execute(['post_id' => $post_id]);

        return $statement->fetchAll();
    }

 
}
