<?php

class RegisterController
{
    public function create()
    {
        view('register');
    }

    public function store()
    {
        $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->execute(['email' => $_POST['email']]);

        if ($stmt->rowCount() > 0) {
            flash('Этот email уже занят.');
            redirect('/registration');
            die;
        }

        $stmt = pdo()->prepare("INSERT INTO `users` (`email`, `password`) 
                                VALUES (:email, :password)");
        $stmt->execute([
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ]);

        redirect('/');
    }
}