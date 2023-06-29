<?php component('head'); ?>
<link href="<?php public_path('css/singin.css') ?>" rel="stylesheet">
<body class="text-center">    
<main class="form-signin">
  <form action="login/store" method="post">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <?php flash() ?>
    <div class="form-floating">
      <input type="email" class="form-control" id="email" 
             name="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" 
             name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
        <a href="/registration">Registration</a>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>
<?php component('footer'); ?>