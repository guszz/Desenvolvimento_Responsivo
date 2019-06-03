$(document).ready(function() {
  // Botão do menu
  $(".menu-principal__btn").click(function() {
    $(".menu-principal").toggleClass("menu-principal--fechado");
  });

  // Slide Depoimentos
  $(".depoimentos__caixa").slick({
    slidesToShow: 1,
    autoplay: true,
    arrows: false,
    dots: true
  });

  // Validando Formulário de contato
  $(".contact-form").validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      nome: "required",
      mensagem: "required"
    }
  });
});
