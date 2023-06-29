<?php component('head'); ?>
<link href="<?php public_path('css/singin.css') ?>" rel="stylesheet">
<body class="text-center">    
<main class="form-signin">
  <form method="post" action="registration/store">
    <h1 class="h3 mb-3 fw-normal">Registration</h1>
    <?php flash(); ?>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
      <label for="pass">Password</label>
    </div>
    <div class="form-floating">
        <a href="/login">Sign In</a>
    </div>

    <button class="w-100 btn btn-lg btn-primary" 
            type="submit">Registration</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>
<?php component('footer'); ?>