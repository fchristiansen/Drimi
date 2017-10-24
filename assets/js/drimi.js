$(document).ready(function() {
    $('.slider_home').owlCarousel({
        loop:true,
        margin:0,
        nav:false,
        dots: true,
        lazyLoad:true,
        autoplay: true,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('#rol1').click(function() {
             $('.slider_home').trigger('to.owl.carousel', 0);
      });
       $('#rol2').click(function() {
             $('.slider_home').trigger('to.owl.carousel', 1);
      });
        $('#rol3').click(function() {
             $('.slider_home').trigger('to.owl.carousel', 2);
      });

      // $('.login').click(
      //     function(e) {
      //        e.preventDefault();
      //       var container = $('.box_login');
      //       container.fadeOut(400, function(){
      //           container.toggleClass('hidden').fadeIn(400);
      //       });
      // });


      //=================== cierra el panel login al click dek botton
      //y click al body

      $(".login").click(function(e) {
             $(".box_login").toggleClass('hidden');
             e.stopPropagation();
         });

         $(document).click(function(e) {
             if (!$(e.target).is('.box_login, .box_login *')) {
                 $(".box_login").addClass('hidden');
             }
         });



      /* ==== selector de sueños ====*/
      $('.suenos a').click(
          function(e) {
            e.preventDefault();
            $('.suenos a').removeClass('selected');
            $(this).addClass('selected');

      });

      /*==== selector de tipo de redaccion ==== */
       $(".diseno_invitacion p#texto0").show();
       $('a.btn_redaccion').click(function(e) {
            e.preventDefault();
            $('a.btn_redaccion').removeClass('activo');
            $(this).addClass('activo');

            $(".diseno_invitacion p").addClass('hide');
              var id = $(this).attr('id'); // obtengo el id
             //muestra el parrafo con el id que corresponde con el del boton
            $(".diseno_invitacion p#"+id+".texto_redaccion").removeClass('hide');

        });


            // ==== selector diseño ====
              $('.botones_diseno a').click(function(e) {
                   e.preventDefault();
                   $('.botones_diseno a').removeClass('prendido');
                   $(this).addClass('prendido');
                   $(".diseno_invitacion div").addClass('hide');
                   $(".diseno_invitacion div.datos_invitado").removeClass('hide');
                   var id = $(this).attr('id'); // obtengo la id
                   console.log(id);
                   $(".diseno_invitacion div#"+id).removeClass('hide');



              });

            // === cambia el color del menu en mobile al click
              $('button.navbar-toggle').click( function(e) {
                      e.preventDefault();
                     $('#container_nav').toggleClass('bg_color');
              });

              // ===== Scroll to Top ====
              $(window).scroll(function() {
                  if ($(this).scrollTop() >= 790) {
                      $('#return-to-top').fadeIn(300);    // Fade in the arrow
                  } else {
                      $('#return-to-top').fadeOut(300);   // Else fade out the arrow
                  }
              });

              $('#return-to-top').click(function() {      // When arrow is clicked
                  $('body,html').animate({
                      scrollTop : 0                       // Scroll to top of body
                  }, 500);
              });


              // ==== custom checkboxes ====
              $('#form_crear_cuenta .checkbox input').iCheck({
                checkboxClass: 'icheckbox_minimal'
               // radioClass: 'iradio_minimal',
               // increaseArea: '20%' // optional
              });

              /* en perfil público, selecciona un solo checkbox */
              $('.selectme input:checkbox').click(function() {
                  $('.selectme input:checkbox').not(this).prop('checked', false);
              });

              // ==== animacion novios ====
                var novio = $('.novio');
                var novio2 = $('.novio2');
                var novia = $('.novia');
                var novia2 = $('.novia2');
                    tl = new TimelineMax({paused:true});
                    tl2 = new TimelineMax({paused:true});
                    tl
                      .to(novia, 0.5, {x: -600, ease:Expo.easeIn })
                      .to(novio2, 0.5, {opacity:1,x:490,ease:Expo.easeOut });
                    tl2
                       .to(novio, 0.5, {x: 600, ease:Expo.easeIn })
                       .to(novia2, 0.5, {opacity:1,x:-490,ease:Expo.easeOut });

                     $('#bt_cambio1').on('click', function(e) {
                              e.preventDefault();

                          if( tl.paused() || tl.reversed()){
                                tl.play();
                            }else{
                                tl.reverse();
                            }
                     });

                     $('#bt_cambio2').on('click', function(e) {
                              e.preventDefault();

                          if( tl2.paused() || tl2.reversed()){
                                tl2.play();
                            }else{
                                tl2.reverse();
                            }
                     });

                // ===== end animacion novios ====




});



document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
    var file = document.getElementById("getval").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('new_img').style.backgroundImage = "url(" + reader.result + ")";
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}




// $(document).ready(function () {
//     $(window).on("resize", function (e) {
//         checkScreenSize();
//     });

//     checkScreenSize();

//     function checkScreenSize(){
//         var newWindowWidth = $(window).width();
//         if (newWindowWidth < 481) {
//             $('.right').insertBefore('.left');
//         }
//         else
//         {
//             $('.left').insertBefore('.right');
//         }
//     }
// });

