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
    
    public function update($id,$categoryName,$categorySlug,$category_status): bool
    {
        $statement = $this->pdo->prepare('UPDATE categories SET name = ?,slug = ?,category_status = ? WHERE  id = ?');
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
   

    public function seflink($val)
    {
        $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#', '?', '*', '!', '.', '(', ')');
        $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp', '', '', '', '', '', '');
        $string = strtolower(str_replace($find, $replace, $val));
        $string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = str_replace(' ', '-', $string);
        return $string;
    }

}
