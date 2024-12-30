<?php

namespace App\Admin\Model;

use System\Engine\Model;

class PrivacyModel extends Model
{
    // Gizlilik politikalarını al
    public function privacyNew(): array
    {
        $statement = $this->pdo->query('SELECT * FROM privacy_policy');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $response ?: [];
    }

    // Aynı başlıkta bir gizlilik politikası var mı kontrol ediyor
    public function privacyExists($newTitle): bool
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM privacy_policy WHERE title = :title');
        $statement->execute([':title' => $newTitle]);
        return $statement->fetchColumn() > 0;
    }

    // Yeni bir gizlilik politikası ekleyecek
    public function create($newTitle, $newContent): int|false
    {
        $statement = $this->pdo->prepare('INSERT INTO privacy_policy (title, content) VALUES (:title, :content)');
        if ($statement->execute([
            ':title' => $newTitle,
            ':content' => $newContent,
        ])) {
            return $this->pdo->lastInsertId(); 
        }
        return false;
    }

    // Gizlilik politikasını güncelle
    public function updatePrivacy($id, $newTitle, $newContent): bool
    {
        $statement = $this->pdo->prepare('UPDATE privacy_policy SET title = :title, content = :content WHERE privacy_id = :privacy_id');
        return $statement->execute([
            ':privacy_id' => $id,
            ':title' => $newTitle,
            ':content' => $newContent,
        ]);
    }

    // Gizlilik politikasını sil
    public function deletePrivacy($id): bool
    {
        $statement = $this->pdo->prepare('DELETE FROM privacy_policy WHERE privacy_id = :privacy_id');
        return $statement->execute([':privacy_id' => $id]);
    }
}
