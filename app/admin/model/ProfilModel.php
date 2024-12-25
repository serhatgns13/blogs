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



    public function ByIdusersUpdate($id, $user_name, $email, $password ): bool
    {
        if (empty($password)) {
            $statement = $this->pdo->prepare('UPDATE users SET user_name = :user_name, email = :email WHERE id = :id');
         return $statement->execute([
            'id' => $id,
            'user_name' => $user_name,
            'email' => $email         
            
        ]);
        }else {
            $statement = $this->pdo->prepare('UPDATE users SET user_name = :user_name, email = :email, password = :password WHERE id = :id');
         return $statement->execute([
            'id' => $id,
            'user_name' => $user_name,
            'email' => $email,
            'password' => $password
        ]);
        }
    }

}
