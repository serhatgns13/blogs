<?php

namespace App\Admin\Model;

use System\Engine\Model;

class CommentsModel extends Model
{
    public function CommentsListe(): array|false
    {
        $statement = $this->pdo->query('SELECT 

        c1.id AS c1_id, 
        c1.post_id AS c1_postID,
        c1.user_id AS c1_userID,
        c1.name,
        c1.content,
        c1.comment_status,
        c1.created_date,

        p1.post_id AS p1_postID,
        P1.user_id AS p1_userID,
        p1.title,
        p1.slug,
        p1.image,

        r1.reply_id,
        r1.reply_name,
        r1.reply_content,
        r1.reply_userID,
        r1.reply_status
                
        FROM comments c1
        INNER JOIN posts p1 ON p1.post_id = c1.post_id
        left JOIN replyadmin r1 ON c1.user_id = r1.reply_userID
        ');

        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


    public function ReplyadminModul($reply_userID, $reply_name, $reply_content, $reply_status): bool
    {
        $sql = "INSERT INTO replyadmin (reply_userID, reply_name,reply_content, reply_status) 
                VALUES (:reply_userID, :reply_name, :reply_content, :reply_status)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':reply_userID' => $reply_userID,
            ':reply_name' => $reply_name,
            ':reply_content' => $reply_content,
            ':reply_status' => $reply_status
        ]);
    }

    public function ReplyadminModalEdit($id, $reply_name, $reply_content, $reply_status, $comment_status, $user_id): bool
    {
        $sql = "UPDATE replyadmin SET reply_name = :reply_name, reply_content = :reply_content, reply_status = :reply_status WHERE reply_userID = :reply_userID";

        $stmt = $this->pdo->prepare($sql);

        $stmtResult = $stmt->execute([
            ':reply_userID' => $id,
            ':reply_name' => $reply_name,
            ':reply_content' => $reply_content,
            ':reply_status' => $reply_status
        ]);

        $sql1 = "UPDATE comments SET comment_status = :comment_status WHERE user_id = :user_id";

        $stmt1 = $this->pdo->prepare($sql1);

        $stmt1Result = $stmt1->execute([
            ':user_id' => $id,
            ':comment_status' => $comment_status
        ]);

        return $stmtResult && $stmt1Result;
    }

    public function deleteCommentAndReplies(int $id): bool
    {
        $commentStatement = $this->pdo->prepare('DELETE FROM comments WHERE user_id = :id');
        $commentStatement->execute([':id' => $id]);

        if ($commentStatement->rowCount() > 0) {
            $replyStatement = $this->pdo->prepare('DELETE FROM replyadmin WHERE reply_userID = :id');
            $replyStatement->execute([':id' => $id]);

            if ($replyStatement->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }


    }





}
