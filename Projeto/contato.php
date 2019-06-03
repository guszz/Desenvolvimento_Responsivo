
<?php
  global $tituloPagina;
  $tituloPagina = "Contato";
  include('partes/cabecalho.php');
  $nome= '';
  $email='';
  $mensagem='';
  $erroFormulario ='';
  $sucessoFormulario = '';
  if(isset ($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    if($nome != '' && $email != '' && $mensagem != ''){
      //Preechido corretamente
      $mensagemEmail = 'Nome:' . $nome . '-';
      $mensagemEmail .= 'Email:' . $email . '-';
      $mensagemEmail .= 'Mensagem:' . $mensagem;
      if(mail('diltonfilho@multiplix.net.br', 'Contato do site', $mensagemEmail)){
        //email enviado
        $sucessoFormulario = 'Seu e-mail foi envia com Sucesso!';
      }
      else{
        //erro enviado
        $erroFormulario = 'Falha ao enviar mensagem!';
      }
    }
    else{
      // Não preenchido corretamente
      $erroFormulario = 'Por favor verifique se todos os campos estão corretos!';
    }
  }
?>  
    <header class="pagina-cabecalho">
      <h1 class="pagina-cabecalho__title">Contato</h1>
    </header>
    <section class="container page-content">
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nihil similique accusamus omnis veritatis rerum ex.</p>
      <form action="contato.php" id="contact-form" class="contact-form" method="post">
        <?php if($erroFormulario != ''): ?>
          <div class="formulario__erro">
            <?php echo $erroFormulario ?>
          </div>
        <?php endif ?>
        <?php if($sucessoFormulario != ''): ?>
          <div class="formulario__sucesso">
            <?php echo $sucessoFormulario ?>
          </div>
        <?php endif ?>
        <div class="contact-form__group contact-form__group--left-colum">
          <label class="contact-form__label" for="nome">Nome:</label><br><br>
          <input class="contact-form__field" type="text" id="nome" name="nome" title="Deixe seu nome!" rerequired>
        </div>
        <div class="contact-form__group contact-form__group--right-colum">
          <label class="contact-form__label" for="email">E-mail:</label><br><br>
          <input class="contact-form__field" type="email" id="email" name="email" title="Deixe seu email!" required>    
      </div>
      <div class="contact-form__group">
        <label class="contact-form__label" for="mensagem">Deixe sua mensagem:</label><br><br>
        <textarea class="contact-form__field" name="mensagem" id="mensagem" title="Deixe sua mensagem!" cols="20" rows="10"></textarea>
      </div>
      <input type="submit" class="contact-form_btn" value="Enviar" name="submit">
      </form>
      <p class="text-center">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, blanditiis.<br>
        Numquam facere nesciunt ipsa soluta mollitia provident similique. Deleniti.
      </p>
    </section>
      <div class="map-view">
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14766.038464983552!2d-42.53770118402102!3d-22.296558443685345!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1532979942660" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
<?php
  include('partes/rodape.php');
?>