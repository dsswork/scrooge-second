<?php

class LoginController
{
    public function index()
    {
        if(check_auth()) {
            redirect('/');
        } else {
            view('login');
        }
    }

    public function store() {
        $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `email` = :email");
        $stmt->execute(['email' => $_POST['email']]);
        if (!$stmt->rowCount()) {
            flash('Пользователь с такими данными не зарегистрирован');
            redirect('/login');
            die;
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            redirect('/');
            die;
        }

        flash('Пароль неверен');
        redirect('/login');
    }

    public function destroy() {
        $_SESSION['user_id'] = null;
        redirect('/login');
    }
}