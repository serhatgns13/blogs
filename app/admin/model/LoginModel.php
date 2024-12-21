<?php

namespace App\Admin\Model;

use System\Engine\Model;

class LoginModel extends Model
{
    public function users(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM users');
        $response = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function ByIdusers(): array|false
    {
        $statement = $this->pdo->query('SELECT * FROM users');
        $response = $statement->fetch(\PDO::FETCH_ASSOC);

        return $response ?: [];
    }

    public function authenticate($username, $password): bool
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
        $statement->execute(['username' => $username]);
        $user = $statement->fetch(\PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return true;
        }

        return false;
    }


}
