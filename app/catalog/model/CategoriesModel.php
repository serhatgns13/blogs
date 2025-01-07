<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class CategoriesModel extends Model
{
    public function categories(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM categories');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }


 
}
