<?php

echo '
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-dark text-light">
    <a class="navbar-brand" href="/forum">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forum">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Artificial Intelligence</a></li>
            <li><a class="dropdown-item" href="#">Programming</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Java</a></li>
            <li><a class="dropdown-item" href="#">Python</a></li>
            <li><a class="dropdown-item" href="#">C#</a></li>
            <li><a class="dropdown-item" href="#">Javascript</a></li>
            <li><a class="dropdown-item" href="#">Java</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <div class = "row mx-2">
        <button class = "btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
        <button class = "btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>
      <form class="d-flex ml-2" role="search">
        <input class="form-control me-2 mx-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
'
?>

<?php
include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
?>