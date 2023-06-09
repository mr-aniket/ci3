<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css">
    <title>Dashboard</title>
  </head>
  <body background=<?= base_url().'assets/static/images/bg.jpg'?>>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?= base_url().'admin/dashboard' ?>">The Blogs</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url(). 'admin/login/logout'?>">Sign out</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" id = "dash" href="<?= base_url().'admin/dashboard' ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id = "adb" href="<?= base_url().'admin/blog/addblog' ?>">
                  <span data-feather="file"></span>
                  Add Blog
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id = "vb" href="<?= base_url().'admin/blog' ?>">
                  <span data-feather="shopping-cart"></span>
                  View Blog
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" class="nav-link" href="<?= base_url(); ?>">
                  <span data-feather="shopping-cart"></span>
                  User's View
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <script>
          if (window.location.href == "http://localhost/ci3/admin/dashboard")
          {
            // console.log("dashboard")
            document.getElementById("dash").classList.add("active")
          }
          else if (window.location.href == "http://localhost/ci3/admin/blog/addblog")
          {
            document.getElementById("adb").classList.add("active")
          }
          else if (window.location.href == "http://localhost/ci3/admin/blog")
          {
            document.getElementById("vb").classList.add("active")
          }
        </script>
        