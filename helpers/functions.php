<?php

function component($name){
    require_once("views/components/$name.view.php");
}

function view($path, $data = null){
    require("views/$path.view.php");
}

function redirect($path){
    header("Location: $path");
}

function public_path ($path){
    echo ROOT.'/public/'.$path;
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool
{
    return !!($_SESSION['user_id'] ?? false);
}

function auth_guard() {
    if(!check_auth()) {
        redirect('/login');
    }
}