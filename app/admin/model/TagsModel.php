<?php

namespace App\Admin\Model;

use System\Engine\Model;

class TagsModel extends Model
{
    public function tagsTicket(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM tags');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdtagsTicket(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM tags');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    // tags kaydetme

    public function creat($ticketName, $ticketSlug): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO tags (name, slug) VALUES (:name, :slug)');

        return $statement->execute([
            ':name' => $ticketName,
            ':slug' => $ticketSlug,
        ]);
    }

    // aynı isimden eklenmemesi
    public function tagsExists($ticketName): bool 
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM tags WHERE  name = :name ');
        $statement ->execute([
            ':name' => $ticketName
        ]);
        return $statement->fetchColumn() > 0;
    }
    // tags Güncelleme
    
    public function update($id, $ticketName, $ticketSlug): bool
    {
        try {
            $statement = $this->pdo->prepare('UPDATE tags SET name = :name, slug = :slug WHERE tags_id = :tags_id');
            return $statement->execute([
                ':tags_id' => $id,
                ':name' => $ticketName,
                ':slug' => $ticketSlug,
            ]);
        } catch (\PDOException $e) {
            return false;
        }
    }

    // silme işlemi
    public function deleteTicket($id): bool{
        $statement = $this->pdo->prepare('DELETE FROM tags WHERE tags_id = :id');
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



