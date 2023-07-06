$(document).ready(function(){
    $('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
        $(this)
          .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
          .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active').eq($(this).index()).addClass('catalog__content_active');
      });
      $('ul.catalog__tabs1').on('click', 'li:not(.catalog__tab1_active)', function() {
        $(this)
          .addClass('catalog__tab1_active').siblings().removeClass('catalog__tab1_active')
          .closest('div.container').find('div.tabs__content').removeClass('tabs__content_active').eq($(this).index()).addClass('tabs__content_active');
      });
      $('ul.catalog__tabs2').on('click', 'li:not(.catalog__tab2_active)', function() {
        $(this)
          .addClass('catalog__tab2_active').siblings().removeClass('catalog__tab2_active')
          .closest('div.container').find('div.tabs__content2').removeClass('tabs__content2_active').eq($(this).index()).addClass('tabs__content2_active');
      });

      // модальные окна скрипт
      
      $('[data-modal1=consultation]').on('click', function(){
        $('.overlay, #consultation').fadeIn();
      });
      $('.modal1__close').on('click', function(){
        $('.overlay, #consultation, #thanks, #order').fadeOut();
      });
      $('.button_mini').on('click', function(){
        $('.overlay, #order').fadeIn();
      });
     /*  $('.button_mini').each(function(i) {
        $(this).on('click', function() {
            $('#order .modal1__descr1').text($('.modal1__descr1').eq(i).text());
            $('.overlay, #order').fadeIn();
      });
    }); */
    /* $('#consultation form').validate();
    $('#order form').validate(); */

    function valideForms(form){
      $(form).validate({
          rules: {
              name: {
                  required: true,
                  minlength: 2
                },
              phone: "required",
              email: {
                  required: true,
                  email: true
              }
          },
          messages: {
              name: {
                  required: "Пожалуйста, введите свое имя",
                  minlength: jQuery.validator.format("Введите {0} символа!")
                },
              phone: "Пожалуйста, введите номер телефона",
              email: {
                required: "Пожалуйста, введите свою почту",
                email: "Неверно введет адрес почты"
              }
            }
      });
    }


  valideForms('#consultation-form');
  valideForms('#consultation form');
  valideForms('#order form');

  $('input[name=phone]').mask("+7 (999) 999-99-99");


  $('form').submit(function(e){
    e.preventDefault();

    if(!$(this).valid()) {
      return;
    }

    $.ajax({
      type: "POST",
      url: "mailer/smart.php",
      data: $(this).serialize()
    }).done(function(){
        $(this).find("input").val("");
        $('#consultation, #order').fadeOut();
        $('.overlay, #thanks').fadeIn('slow');

        $('form').trigger('reset');
    });
    return false;
  });
    $(window).scroll(function(){
      if ($(this).scrollTop() > 1600) {
        $('.pageup').fadeIn();
        } else {
        $('.pageup').fadeOut();
      }
    });

    $("a[href^='#']").click(function(){
      const _href = $(this).attr("href");
      $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
      return false;
  });


});
