<?php

namespace App\Admin\Model;

use System\Engine\Model;

class KategoriModel extends Model
{
    public function category(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM categories ');
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

    public function creat($categoryName,$categorySlug,$categoryParentid,$category_status): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO categories (name, slug, parent_id, category_status) VALUES (:name, :slug, :parent_id, :category_status)');
        
        return $statement->execute([
            ':name' => $categoryName,
            ':slug' => $categorySlug,
            ':parent_id' => $categoryParentid,
            ':category_status' => $category_status
        ]);
    }

    // kategori aynı isimden eklenmemesi
    public function kategoriExists($categoryName): bool 
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM categories WHERE  name = :name ');
        $statement ->execute([
            ':name' => $categoryName
        ]);
        return $statement->fetchColumn() > 0;
    }
    // kategori Güncelleme
    
    public function update($id, $categoryName, $categorySlug, $category_status): bool
    {
        try {
            $statement = $this->pdo->prepare('UPDATE categories SET name = :name, slug = :slug, category_status = :category_status WHERE category_id  = :category_id');
            return $statement->execute([
                ':category_id' => $id,
                ':name' => $categoryName,
                ':slug' => $categorySlug,
                ':category_status' => $category_status
            ]);
        } catch (\PDOException $e) {
            // İstisna mesajını loglayabilir veya gerektiği gibi işleyebilirsiniz
            return false;
        }
    }

    // silme işlemi
    public function deleteCategory($id): bool{
        $statement = $this->pdo->prepare('DELETE FROM categories WHERE category_id = :id');
        return $statement->execute(['id'=> $id]);
    }
   

  

}
