<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles/site.css" >
    <link rel="stylesheet" href="styles/basket.css">
    <link rel="stylesheet" href="authorization/css/main.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title>Кинотеатр</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<header>
    <div id="headerInside">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <i class="fas fa-film"></i> <span>CINEMA </span> UNIVERSE</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 top-menu">

        <li class="nav-item">
          <a class="nav-link" href="index.php?page=index">ГЛАВНАЯ СТРАНИЦА</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="index.php?page=shop">ФИЛЬМЫ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">РАСПИСАНИЕ</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">АРЕНДА ЗАЛА</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">НОВОСТИ</a>
        </li>
        
      </ul>
</div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-success" type="button">Найти</button>
      </form>
      <div id="navWrap">

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#tickets" href="#"><i class="fas fa-ticket-alt"></i></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?page=authorization">
        <i class="far fa-user"></i></a>
        </li>
        </ul>
  </div>

    </div>
    </div>
</header>