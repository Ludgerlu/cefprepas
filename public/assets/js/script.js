
    function vc_custominfiniteloop_init(vc_cil_element_id){
        var vc_element = '#' + vc_cil_element_id;
        window.maxItens = jQuery(vc_element).data('per-view');
        window.addedItens = 0;
        jQuery(vc_element).find('.vc_carousel-slideline-inner').find('.vc_item').each(function(){
        if (window.addedItens < window.maxItens) {
            if (window.addedItens == 0 ) {
            jQuery(this).clone().addClass('vc_custominfiniteloop_restart').removeClass('vc_active').appendTo(jQuery(this).parent());            
            } else {
            jQuery(this).clone().removeClass('vc_active').appendTo(jQuery(this).parent());         
            }
            window.addedItens++;
        }
        });
        jQuery('.vc_custominfiniteloop_restart').bind('addClasschange', null, function(){
        var vc_carousel = jQuery(this).parent().parent().parent().parent();
        jQuery(vc_carousel).data('vc.carousel').transition_speed = 0;
        jQuery(vc_carousel).data('vc.carousel').to(0);
        setTimeout("vc_cil_restore_transition_speed('"+jQuery(vc_carousel).prop('id')+"')",100);
        });
    }
    function vc_cil_restore_transition_speed(element_id){
        jQuery('#' + element_id).data('vc.carousel').transition_speed = 600; 
    }
    
  
  
  
  
  jQuery( document ).ready(function($) {
  
    jQuery('*[data-bg-webp]').each(function (index) {
      jQuery(this).css('background-image','url(' + jQuery(this).attr('data-bg') + ')');
    }); 
  
  
      /* resize elements to equal height */
      function equalheight(parentClass, elemClass, alsoParent = 0) {
        var maxHeight = 450;
          $(parentClass).each(function (index) {
              $(this).find(elemClass).height('auto');
              $(this).find(elemClass).each(function (index) {
                  if ($(this).height() > maxHeight)
                      maxHeight = $(this).height();
              });
              if(maxHeight!=0){
                $(this).find(elemClass).height(maxHeight);
                console.log(maxHeight);
                if(elemClass=='.content_wrapper'){
                  $(this).find('.img_wrapper').height(maxHeight+50);
                } 
              }
          });
          if(alsoParent && maxHeight!=0){ 
            if(elemClass=='.content_wrapper'){
              $(parentClass).height(maxHeight+50);
            }else{
              $(parentClass).height(maxHeight); 
            }
          }
      }
  
      equalheight('.row-values', '.stm_image_box__title > h2', 0);
      $(window).bind("resize", equalheight('.row-values', '.stm_image_box__title > h2', 0));
  
  
      /* prevent menu click */
      $('.non-click > a').click(function(evt){
          evt.preventDefault();
          return 0;
      });
  
  
      /* menu colors hover */
      $('#header.transparent_header .header_main_menu_wrapper .header-menu > li.menu-item-has-children')
        .mouseenter(function() {
          $('#header.transparent_header').addClass('non-transparent');  
        })
        .mouseleave(function() {
          $('#header.transparent_header').removeClass('non-transparent');  
      });
  
      /* Cookieyes setting hide on bottom of page */
      $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height()-80) {
            $('#cookie-law-info-again').fadeOut();
        }else{
            if($('#cookie-law-info-bar').css('display') == 'block'){
  
            }else{
              $('#cookie-law-info-again').fadeIn();
            }
        }
     });
     $('#cookie-law-info-again').attr('title',$('#cookie_hdr_showagain').text());
  
  
      /* Post Types Big Carousel [Homepage] */
      $('.post_types_big_carousel').each(function () {
          if ($(this).children().size() < 2) {
            return;
          }
          var slides = 1;
          var $this = $(this);
          var owl = $this.owlCarousel({
            nav: true,
            items: slides,
            autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            slideBy: 1, 
            margin: 0,
            dots: 0,
            responsive: {
              0: { items: 1 },
              1200: { items: slides }
            } 
          });
        });
        setTimeout(800, function(){
          equalheight('.post_types_big_carousel', '.content_wrapper', 1);
        });
        $(window).bind("resize", equalheight('.post_types_big_carousel', '.content_wrapper', 1));
  
  
      // auxiliary code to create triggers for the add and remove class for later use
      (function($){
        $.each(["addClass","removeClass"],function(i,methodname){
            var oldmethod = $.fn[methodname];
            $.fn[methodname] = function(){
                  oldmethod.apply( this, arguments );
                  this.trigger(methodname+"change");
                  return this;
            }
        });
      })(jQuery);
      jQuery('.vc_custominfiniteloop').find('div[data-ride="vc_carousel"]').each(function(){
        var vc_cil_element = jQuery(this).prop("id");
        setTimeout("vc_custominfiniteloop_init('"+vc_cil_element+"')",2000);      
      });    
  
  
      /* Mobile menu toggler */
      $('#header_menu_toggler.collapse').on('show.bs.collapse', function() {
        $('.mobile_header_menu').addClass('active');
      });
     
      $('#header_menu_toggler.collapse').on('hide.bs.collapse', function() {
        $('.mobile_header_menu').removeClass('active');
      });
  
      
      /* Mobile menu open */
      $('.non-click a').on('click', function(){
        $(this).next().click();
      });
  
  
      /*Documentation form pdf download */  
      $('body').find('select.documentation-required').on("select2:select", function (e) {
        var text = $(this).find('option:selected').text(); 
        $(this).closest('.wpcf7').find('input[name="documentation-required-text"]').val(text);
      });   
      /*Documentation form pdf download */ 
  
  
  
      /* form popup */
    //   +(function($) {
    //     var WPB_PCF_Button = {
    //         initialize: function() {
    //             $('.popupform').on('click', this.FireContactForm);
    //             $('.vc_btn3-style-classic').on('click', this.FireContactForm);
    //         },
    
    //         FireContactForm: function(e) { 
    //             e.preventDefault();
    
    //             var button  = $(this),
    //             id          = 5,
    //             post_id     = 5220,
    //             form_style  = 0,
    //             width       = '500px';
    
    //             wp.ajax.send( {
    //                 data: {
    //                     action: 'wpb_pcf_fire_contact_form',
    //                     pcf_form_id: id,
    //                     wpb_pcf_post_id: post_id,
    //                     _wpnonce: WPB_PCF_Vars.nonce 
    //                 },
    //                 beforeSend : function ( xhr ) {
    //                   button.addClass('wpb-pcf-btn-loading');
    //                 },
    //                 success: function( res ) {
    //                     button.removeClass('wpb-pcf-btn-loading');
    //                     Swal.fire({
    //                         html: res,
    //                         showConfirmButton: false,
    //                         customClass: {
    //                             container: 'wpb-pcf-form-style-' + form_style,
    //                         },
    //                         width: width,
    //                         showCloseButton: true,
    //                     });
                        
    //                     // For CF7 5.3.1 and before
    //                     if ($.isFunction(wpcf7.initForm)) {
    //                         wpcf7.initForm( $('.wpcf7-form') );
    //                     }
    
    //                     // For CF7 5.4 and after
    //                     if ($.isFunction(wpcf7.init)) {
    //                         document.querySelectorAll(".wpcf7 > form").forEach(function (e) {
    //                             return wpcf7.init(e);
    //                         });
    //                     }
  
    //                     var btn_brochure = button.html().toLowerCase();
    //                     if(btn_brochure.indexOf('brochure')!== -1){
    //                       $('#swal2-content').find('.documentation-required').find('option').not(':first').remove();
    //                     }else{
    //                       $('#swal2-content').find('.documentation-required').find('option:first').remove();
    //                     }
  
    //                     $('#swal2-content').find('.documentation-required').each(function(){
    //                       $(this).select2();
    //                     });
  
    //                     var btn_brochure = button.html().toLowerCase();
    //                     if(btn_brochure.indexOf('brochure')!== -1){
    //                       $('#swal2-content').find('.documentation-required').find('option').not(':first').remove();
    //                     }else{
    //                       $('#swal2-content').find('.documentation-required').find('option:first').remove();
    //                     }
  
    //                     $('#swal2-content').find('.documentation-required').each(function(){
    //                       $(this).select2();
    //                     });
  
    //                     if(btn_brochure.indexOf('brochure')!== -1){
    //                       $('body').append('<style>.select2-container--default.select2-container--open.select2-container--below .select2-selection--single, .select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple { border-radius: 24px !important; } </style>');
                        
    //                     }
  
    //                     $('#swal2-content').find('select.documentation-required').on("select2:select", function (e) {
    //                       var text = $(this).find('option:selected').text();
    //                         console.log(button.attr('href'));
    //                       $(this).closest('.wpcf7').find('input[name="documentation-required-text"]').val(text);
    //                     });    
  
                        
                        
    //                     // force recaptcha v2 render on popup
    //                     console.log("force recaptcha v2 render on popup");
  
    //                     /*
    //                     ...
    //                     [recaptcha]
    //                     <div id="recaptcha_placeholder"></div>
    //                     ...
    //                     */
    //                     setTimeout(() => {
    //                       grecaptcha.render('recaptcha_placeholder', {
    //                         'sitekey' : '6LeLAJ8pAAAAAJ2WzH_kriDOvlJ-_RcxE5_bbD8g'
    //                       });
    //                     }, 100);
    //                 }, 
    //                 error: function(error) {
    //                     alert( error );
    //                 }
    //             });
    //         },
    
    
    //     };
    
    //     $(function() {
    //         WPB_PCF_Button.initialize();
    //     });
    //     })
    (jQuery);
  
  
  
  
  
  });
  