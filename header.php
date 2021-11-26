<?php

  $enderecoBD = "localhost";
  $nomeBD = "id17639865_pweb06_site";
  $utilizadorBD = "id17639865_pweb06_site_user";
  $passwordBD = "|+asjC7kQ6U12i5g";
  
  //Estabelecer ligação e guardar a mesma
  $ligacaoBD = mysqli_connect($enderecoBD, $utilizadorBD, $passwordBD, $nomeBD) or die("Erro de acesso à Base de Dados.");

?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="css/style.css" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>PT Game Devs</title>
  </head>
  <body>
    
    <img class="bg" src="imagens/imagem-bg.jpg">

    <header class="container-fluid sticky-top bg-dark">
      <div class="row">
        <div class="col-3"></div>
      </div>
    </header>

    <div class="container">
      <div class="social d-flex flex-row-reverse">
        <i class="fa fa-facebook-official fa-lg"></i>
        <i class="fa fa-instagram fa-lg"></i>
        <i class="fa fa-twitter fa-lg"></i>
        <i class="fa fa-linkedin-square fa-lg"></i>
        <i class="fa fa-facebook"></i>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container">
        <!--Logo-->
        <a href="#" class="navbar-brand">
          <img src="imagens\logo_devCamp.svg" alt="logo" />
        </a>

        <!--hamburger-->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!--menu-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"
                >Início</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galeria.php"
                >Forum</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="servicos.php"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Serviços
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="servicos.php">Estúdios</a></li>
                <li><a class="dropdown-item" href="sobrenos.php">Sobre Nós</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="contactos.php">Contactos</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-3 mx-auto"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-primary" type="submit">
              Pesquisa
            </button>
          </form>
        </div>
      </div>
    </nav>