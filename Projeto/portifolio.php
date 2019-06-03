<?php
  global $tituloPagina;
  $tituloPagina = "Portifólio";
  include('partes/cabecalho.php');
?>
      <header class="pagina-cabecalho">
        <h1 class="pagina-cabecalho__title">Portifófio</h1>
      </header>
      <section class="page-content">
        <p class="text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
          Dolorem sequi maxime est quod autem nihil cupiditate possimus
          doloribus quos veniam? <br />
          Modi eaque molestiae sit quibusdam, provident amet doloribus ipsam
          deserunt.
        </p>
        <nav>
          <ul class="Job-list">
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/aircraft-2806035_1280.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/aircraft-2806035_min.jpg"
                  alt="Air plane"
                />
                <h2 class="Job-list__title">Nome do Job - 01</h2>
              </a>
            </li>
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/gear-2291916_1280.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/gear-2291916_min.jpg"
                  alt="Bike Gear"
                />
                <h2 class="Job-list__title">Nome do Job - 02</h2>
              </a>
            </li>
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/hong-kong-1990268_1280.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/hong-kong-1990268_min.jpg"
                  alt="Hong Kong"
                />
                <h2 class="Job-list__title">Nome do Job - 03</h2>
              </a>
            </li>
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/landscape-2268775_1280.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/landscape-2268775_min.jpg"
                  alt="Landscape"
                />
                <h2 class="Job-list__title">Nome do Job - 04</h2>
              </a>
            </li>
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/saddle-2614038_1280.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/saddle-2614038_min.jpg"
                  alt="saddle"
                />
                <h2 class="Job-list__title">Nome do Job - 05</h2>
              </a>
            </li>
            <li class="Job-list__item">
              <a
                data-fancybox="gallery"
                href="css/img/portfolio/town-2430571_1920.jpg"
              >
                <img
                  class="Job-list__image"
                  src="css/img/portfolio/miniaturas/town-2430571_min.jpg"
                  alt="Town"
                />
                <h2 class="Job-list__title">Nome do Job - 06</h2>
              </a>
            </li>
          </ul>
        </nav>
      </section>
<?php
  include('partes/rodape.php');
?>