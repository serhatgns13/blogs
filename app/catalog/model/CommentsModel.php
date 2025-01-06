<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class CommentsModel extends Model
{

    public function CommentsAdd(string $name, string $email, string $content, int $post_id, int $user_id, int $comment_status): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO comments (name, email, content, post_id, user_id,comment_status) VALUES (:name, :email, :content, :post_id, :user_id,:comment_status)');
        $response = $statement->execute([
            'name' => $name,
            'email' => $email,
            'content' => $content,
            'post_id' => $post_id,
            'user_id' => $user_id,
            'comment_status' => $comment_status
        ]);

        return $response;
    }


    public function CommentsList(string $slug): array
    {
        $statement = $this->pdo->prepare('SELECT
        p1.post_id AS postID,
        c1.post_id,
        c1.name AS userName,
        c1.email,
        c1.content,
        c1.created_date,
        r1.reply_id,
        r1.reply_name,
        r1.reply_content AS reply_content,
        r1.reply_created_date AS reply_date

        FROM comments c1
        INNER JOIN posts p1 ON c1.post_id = p1.post_id
        LEFT JOIN replyadmin r1 ON r1.reply_userID = c1.user_id
        
        WHERE p1.slug = :slug AND c1.comment_status = 1 ORDER BY c1.created_date DESC');
        $statement->execute(['slug' => $slug]);
        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result ?: [];
    }



}
