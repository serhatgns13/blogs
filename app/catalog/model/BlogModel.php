<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class BlogModel extends Model
{
    public function posts(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdposts(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM posts');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

}
