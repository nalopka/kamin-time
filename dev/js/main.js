$(function() {
  var mySwiper = new Swiper ('.swiper-container', {
    // direction: 'vertical',
    loop: true,
    // slidesPerView: 1
    navigation: {
 		nextEl: '.swiper-button-next',
  	prevEl: '.swiper-button-prev'
		},
  });



// MODAL
    var elements = $('.modal-overlay, .modal');
    var body = $('body');

    $('.modal-button').click(function(){
        elements.addClass('active');
        body.toggleClass('modal-lock');

    });

    $('.close-modal').click(function(){
        elements.removeClass('active');
        body.toggleClass('modal-lock');

    });


//OPEN MODELS LIST
  var showModels = $(".show-models");
  var itemList = ".models-container";
  var itemContainer = ".fireplaces-container";

  showModels.click(function(){
    $(this).closest(itemContainer).find(itemList).slideToggle(400);
  });

// SMOOTHSCROLL

$("a").on('click', function(event) {
  if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        window.location.hash = hash;
      });
  }
});

// CALLBACK

      var $callback = $("[data-callback-show]");
      var $callbackForm = $("[data-callback-form]");

      function checkInputs($inputs){
        $inputs.each(function(){
          var $input = $(this).closest('.text-input');
          if (!$(this).val()) {$input.addClass('error'); }
        });
      }

      $callback.click(function(){
        $(this).closest('[data-callback-state]').attr('data-callback-state', 'form');
      });

      $callbackForm.on('focus', 'input', function(){
        $(this).closest('.text-input').removeClass('error');
      });

      $callbackForm.on('click', '.text-input', function(){
        $(this).find('input').focus();
      });

      $callbackForm.on('submit', function(e){
        var $this = $(this);
        e.preventDefault();

        checkInputs($this.find('input[type=tel]'));

        if (!$this.find('.text-input.error').length){
          var ajaxData = {
            type: $this.attr('method'),
            data: $this.serialize()
          };
          $this.find('button[type=submit]').prop('disabled', true);
          $this.find('.text-input').addClass('disabled');
          $.ajax(ajaxData).done(function() {
            $this.find('button[type=submit]').prop('disabled', false).addClass('success').text('Отправлено!');
          });
        }
      });






});
