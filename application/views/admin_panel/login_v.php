<?php
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/examples/sign-in/signin.css">
    <title>Admin Login</title>
  </head>
  
  <body>
  <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Others</h4>
              <ul class="list-unstyled">
              <li><a href="<?= base_url().'admin/login';?>" class="text-white">Admin Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    <?php
        if ($error != "NO_ERROR")
        {
          echo '<div class="alert alert-danger" role="alert">';
          echo "$error";
          echo '</div>';
        }
    ?>

    <form action="<?= base_url().'admin/login/login_post'?>" method="post" class="form-signin">
    <!-- <img class="mb-4" src="/application/images/user.png" alt="" width="100" height="57"> -->
    
    <div class="text-center">
      <a href="<?= base_url();?>assets/static/page/hidden_game.php"><img src="<?= base_url();?>assets/static/user.png" style="cursor: auto;" width=100px" alt=""></a>
    </div>
    
    
    <h1 class="h3 mb-3 fw-normal" style="text-align: center;">Please sign in</h1>
    <div class="form-floating">
      <input type="text" name="uname" class="form-control" id="floatingInput" placeholder="Username">
      <!-- <label for="floatingInput">Email address</label> -->
    </div>
    <div class="mb-2"></div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <!-- <label for="floatingPassword">Password</label> -->
    </div>

    <div class="checkbox mb-3 text-center">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <div>
      <p class="mt-5 mb-3 text-muted text-center">© The Blogs 2017–2023</p>
    </div>
  </form>
  <!-- Example single danger button -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
?>