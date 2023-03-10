<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Telles LPG admin panel</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.0/examples/dashboard/dashboard.css" rel="stylesheet">
</head>
<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 "  style="background-color:
  #1d3557 !important;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Telles LPG</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" >  {{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}"
      method="POST" class="d-none">
      @csrf
    </form>
  </li>
</ul>
</header>
<style type="text/css">
  .navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none !important;
    box-shadow: none !important;
        border: 0px !important;


}
button.navbar-toggler.position-absolute.d-md-none.collapsed {
    border: 0px !important;
}
input.form-control.form-control-dark.w-100{
  visibility: hidden !important;
}
</style>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 border-0 d-md-block bg-light sidebar collapse" style="">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if($active_panel=='Dashboard') {{'active'}} @endif" aria-current="page" href="/adminpanel">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($active_panel=='Orders') {{'active'}} @endif" href="/orders">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
  <!--         <li class="nav-item">
            <a class="nav-link  @if($active_panel=='Products') {{'active'}} @endif" href="/products">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link  @if($active_panel=='Customers') {{'active'}} @endif" href="/customers">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>

        </ul>
      </div>
    </nav>
