<?php

namespace App\Catalog\Model;

use System\Engine\Model;

class BaseModel extends Model
{
    public function settings(): array | false
    {
        $statement = $this->pdo->query('SELECT * FROM settings');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

   
 
}
