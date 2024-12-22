<?php

namespace App\Admin\Model;

use System\Engine\Model;

class KategoriModel extends Model
{
    public function category(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM categories');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdCategories(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM categories');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    // kategori kaydetme

    public function creat($categoryName,$categorySlug,$category_status): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO categories (name, slug, category_status) VALUES (:name, :slug, :category_status)');

        return $statement->execute([
            ':name' => $categoryName,
            ':slug' => $categorySlug,
            ':category_status' => $category_status
        ]);
    }

    // kategori Güncelleme
    
    public function update($id,$categoryName,$categorySlug,$category_status): bool
    {
        $statement = $this->pdo->prepare('UPDATE categories SET name = :name, slug = :slug, category_status = :category_status  WHERE  id = :id');
         return $statement->execute([
            'id' => $id,
            'name' => $categoryName,
            'slug' => $categorySlug,
            'category_status' => $category_status
        ]);
    }

    // silme işlemi
    public function deleteCategory($id): bool{
        $statement = $this->pdo->prepare('DELETE FROM categories WHERE id = :id');
        return $statement->execute(['id'=> $id]);
    }
   


}
