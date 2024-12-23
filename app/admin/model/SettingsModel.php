<?php

namespace App\Admin\Model;

use System\Engine\Model;

class SettingsModel extends Model
{

    public function ByIdSettings(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM settings where set_id = 1');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function SettingsUpdate(array $data): bool
    {
        $statement = $this->pdo->prepare('UPDATE settings SET set_title = :set_title, set_description = :set_description, set_images = :set_images, set_keywords = :set_keywords, set_author = :set_author, set_email = :set_email WHERE set_id = :set_id');
        $response = $statement->execute($data);

        return $response;
    }

    public function SettingsUpdateNull(array $data): bool
    {
        $statement = $this->pdo->prepare('UPDATE settings SET set_title = :set_title, set_description = :set_description, set_keywords = :set_keywords, set_author = :set_author, set_email = :set_email WHERE set_id = :set_id');
        $response = $statement->execute($data);

        return $response;
    }

}
