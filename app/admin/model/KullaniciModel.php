<?php

namespace App\Admin\Model;

use System\Engine\Model;

class KullaniciModel extends Model
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


    // Kullanıcı kaydı
    public function registerUser($username, $email, $password, $role_id, $userstatus): bool
    {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $statement = $this->pdo->prepare('INSERT INTO users (user_name, email, password, role_id, user_status) VALUES (:user_name, :email, :password, :role_id, :user_status)');
        return $statement->execute([
            ':user_name' => $username,
            ':email' => $email,
            ':password' => $hashedPassword,
            ':role_id' => $role_id,
            ':user_status' => $userstatus
        ]);
    }

    public function userExists($username, $email): bool
    {
        $statement = $this->pdo->prepare('SELECT COUNT(*) FROM users WHERE user_name = :user_name OR email = :email');
        $statement->execute([
            ':user_name' => $username,
            ':email' => $email
        ]);
        return $statement->fetchColumn() > 0;
    }

  
    // Güncelleme işlemi

    public function updateUser($id, $username, $email, $password, $role_id, $userstatus): bool
    {
        // Şifre alanı boşsa, mevcut şifreyi koru
        if (empty($password)) {
            $statement = $this->pdo->prepare('UPDATE users SET user_name = :user_name, email = :email, role_id = :role_id, user_status = :user_status WHERE id = :id');
            return $statement->execute([
                'id' => $id,
                'username' => $username,
                'email' => $email,
                'role_id' => $role_id,
                'userstatus' => $userstatus
            ]);
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $statement = $this->pdo->prepare('UPDATE users SET user_name = :user_name, email = :email, password = :password, role_id = :role_id, user_status = :user_status WHERE id = :id');
            return $statement->execute([
                'id' => $id,
                'username' => $username,
                'email' => $email,
                'password' => $hashedPassword,
                'role_id' => $role_id,
                'userstatus' => $userstatus
            ]);
        }
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
