<?php

namespace App\Admin\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM `posts`,categories,users WHERE posts.category_id = categories.category_id and posts.user_id = users.id');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdposts(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


    public function createPost($user_id,$blogTitle,$blogslug,$blogContent,$blogİmages,$categoryID,$blogPostStatus): bool
    {
        $sql = "INSERT INTO posts (user_id, title,slug ,content, image, category_id, post_status) 
                VALUES (:user_id, :title,:slug, :content, :image, :category_id, :post_status)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':user_id' => $user_id,
            ':title' => $blogTitle,
            ':slug' => $blogslug,
            ':content' => $blogContent,
            ':image' => $blogİmages,
            ':category_id' => $categoryID,
            ':post_status' => $blogPostStatus
        ]);
    }

    public function PostsUpdate(array $data): bool
    {
        $statement = $this->pdo->prepare("UPDATE posts SET user_id = :user_id, title = :title,slug = :slug, content = :content, image = :image, category_id = :category_id, post_status = :post_status WHERE post_id = :id");
        $response = $statement->execute($data);
        return $response;
    }
    public function PostsUpdateNull(array $data): bool
    {
        $statement = $this->pdo->prepare("UPDATE posts SET user_id = :user_id, title = :title,slug = :slug, content = :content,  category_id = :category_id, post_status = :post_status WHERE post_id = :id");
        $response = $statement->execute($data);
        return $response;
    }



    public function Blog($title): bool
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM posts WHERE title = :title');
        $statement->execute([
            ':title' => $title
        ]);
        return $statement->fetchColumn() > 0;
    }
    // dosyadan resim silme işlemi
    public function getBlogById($id): array|false
    {
        $sql = "SELECT * FROM posts WHERE post_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    // blog sayfasında sütün silemee
    public function deleteBlogs($id): bool{
        
        $statement = $this->pdo->prepare('DELETE FROM posts WHERE post_id = :id');
        return $statement->execute(['id'=> $id]);
    }




}