<?php
  include('partes/cabecalho.php');
?>
      <!--Primeira dobra-->
      <header class="home-frst-block">
        <h2 class="home-frst-block__title">Texto grande bem aqui</h2>
        <p class="home-frst-block__subtitle">E um texto menor aqui!</p>
        <a class="home-frst-block__rolle" href="#servicos"
          >Role para ver mais!
          <img src="css/img/icone-mouse.png" alt="ícone de mouse"
        /></a>
      </header>
      <!--Seção serviços-->
      <section id="servicos" class="servicos">
        <div class="container">
          <h2 class="section-title">Nossos Serviços</h2>
          <section class="servicos__block">
            <img
              class="servicos__image"
              src="css/img/icone-desenvolvimento-web.png"
              alt="ícone globo referenciando serviço de desenvolvimento web"
            />
            <h3>Desenvolvimento Web</h3>
            <p class="text-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, et
              quae? Eum autem est, assumenda fuga eos incidunt perspiciatis
              similique! Esse corrupti eum odit fugit impedit perspiciatis
              itaque vel aliquid! Qui quae vel debitis adipisci non nesciunt
              voluptate ipsa, sit numquam sunt officiis nemo accusamus rem
              doloribus odio molestias ut dolores nisi ducimus possimus officia
              quia. Dolor quas reiciendis fugit.
            </p>
          </section>
          <section class="servicos__block">
            <img
              class="servicos__image"
              src="css/img/icone-carrinho-compras.png"
              alt="ícone carrinho de compras referenciando serviço de e-commerces"
            />
            <h3>e-Commerce</h3>
            <p class="text-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, et
              quae? Eum autem est, assumenda fuga eos incidunt perspiciatis
              similique! Esse corrupti eum odit fugit impedit perspiciatis
              itaque vel aliquid! Qui quae vel debitis adipisci non nesciunt
              voluptate ipsa, sit numquam sunt officiis nemo accusamus rem
              doloribus odio molestias ut dolores nisi ducimus possimus officia
              quia. Dolor quas reiciendis fugit.
            </p>
          </section>
          <section class="servicos__block">
            <img
              class="servicos__image"
              src="css/img/icone-cafe.png"
              alt="ícone caneca de café referenciando serviço de café!"
            />
            <h3>Desenvolvimento Web</h3>
            <p class="text-content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, et
              quae? Eum autem est, assumenda fuga eos incidunt perspiciatis
              similique! Esse corrupti eum odit fugit impedit perspiciatis
              itaque vel aliquid! Qui quae vel debitis adipisci non nesciunt
              voluptate ipsa, sit numquam sunt officiis nemo accusamus rem
              doloribus odio molestias ut dolores nisi ducimus possimus officia
              quia. Dolor quas reiciendis fugit.
            </p>
          </section>
        </div>
      </section>
      <!--Fim Seção serviços-->

      <!--Seção Depoimentos-->
      <section class="depoimentos">
        <div class="container">
          <h2 class="section-title section-title--branco">
            O que falam sobre nós
          </h2>
          <div class="depoimentos__caixa">
            <section class="depoimentos__item">
              <img
                class="depoimentos__image"
                src="css/img/depoimentos/pessoa-1.jpg"
                alt="silueta de uma pessoa"
              />
              <p class="depoimentos__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                numquam facere recusandae praesentium perferendis magnam tempore
                rem. Quae, deserunt. Nostrum optio est provident nobis qui quo
                aliquid esse corrupti soluta!
              </p>
              <p class="depoimentos__person">Nome Fulano - Atividade</p>
            </section>

            <section class="depoimentos__item">
              <img
                class="depoimentos__image"
                src="css/img/depoimentos/pessoa-1.jpg"
                alt="silueta de uma pessoa"
              />
              <p class="depoimentos__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                numquam facere recusandae praesentium perferendis magnam tempore
                rem. Quae, deserunt. Nostrum optio est provident nobis qui quo
                aliquid esse corrupti soluta!
              </p>
              <p class="depoimentos__person">Nome Fulano - Atividade</p>
            </section>

            <section class="depoimentos__item">
              <img
                class="depoimentos__image"
                src="css/img/depoimentos/pessoa-1.jpg"
                alt="silueta de uma pessoa"
              />
              <p class="depoimentos__texto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo
                numquam facere recusandae praesentium perferendis magnam tempore
                rem. Quae, deserunt. Nostrum optio est provident nobis qui quo
                aliquid esse corrupti soluta!
              </p>
              <p class="depoimentos__person">Nome Fulano - Atividade</p>
            </section>
          </div>
        </div>
      </section>
      <!--Fim Seção depoimentos-->
<?php
  include('partes/rodape.php');
?>
