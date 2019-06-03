<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php
      $titulo = "Design Responsivo";
      global $tituloPagina;
      if($tituloPagina != ''){
        $titulo .= ' | ' . $tituloPagina;
      }
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $titulo ?></title>
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>

  <body>
    <header class="cabecalho">
      <div class="container">
        <?php if($tituloPagina == ''): ?>
          <h1 class="logo">Design Responsivo</h1>
        <?php else: ?>
          <a href="index.php" class="logo">Design Responsivo</a>
        <?php endif; ?>
        <nav class="menu-principal menu-principal--fechado">
          <button class="menu-principal__btn">Abrir/Fechar Menu</button>
          <ul class="menu-principal__lista">
            <li>
              <a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual':''?>" href="index.php">Home</a>
            </li>
            <li>
              <a class="menu-principal__item <?php echo $tituloPagina == 'Sobre Nós' ? 'menu-principal__item--atual':''?>" href="sobre.php">Sobre Nós</a>
            </li>
            <li>
              <a class="menu-principal__item <?php echo $tituloPagina == 'Portifólio' ? 'menu-principal__item--atual':''?>" href="portifolio.php">Portifólio</a>
            </li>
            <li>
              <a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual':''?>" href="contato.php">Contato</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>