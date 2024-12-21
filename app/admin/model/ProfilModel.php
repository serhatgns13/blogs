<?php

namespace App\Admin\Model;

use System\Engine\Model;

class ProfilModel extends Model
{
    public function users(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM users');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdusers(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM users');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

}
