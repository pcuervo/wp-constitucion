(function($){

    "use strict";

    $(function(){
        /**
         * VIDEO FULL 
         */
        if (document.getElementById("container_video") ){
            videoHome();
            $( window ).resize(function() {
                videoHome();
            });

        }

        function videoHome(){
            var ancho_nuevo = $(window).width();
            var alto_nuevo = $(window).height();

            $('#container_video').css({'width': ancho_nuevo, 'height': alto_nuevo});
        }

        $('.js-hero_video__scroll').on('click', function(){
            $("body").animate({scrollTop: $('#js-home-scroll-point').position().top - 130 }, '700');
        });


        $('#close-feedback').on('click', function(){
            $('#feedback, .modal-backdrop').remove();
            var $feedback = $('#feedback');
        });

        /**
         * LUGA DEL EVENTO
         */
        if (document.getElementById("ubicacion_evento")) {
            var autocomplete = new google.maps.places.Autocomplete($("#ubicacion_evento")[0], {});

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();

                $('#latitud_evento').val( place.geometry.location.lat() );
                $('#longitud_evento').val( place.geometry.location.lng() );

                var iframe = '<iframe width="100%" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='+place.geometry.location.lat()+','+place.geometry.location.lng()+'&hl=es;z=14&amp;output=embed" title="Mapa de lugar del evento"></iframe>';
                $('.iframe-cont').empty().append(iframe);

            });

        };


        /**
         * INIT FLEXSLIDER
         */
        $('.flexslider').flexslider({
            animation: "slide"
        });

        /**
         * slick slider
         */
        $('.slider.responsive').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                    }
                }
            ]
        });


        /**
         * DATOS MODAL GRUPO DE TRABAJO
         */
        $('.content-trabajo').on('click', function(){
            var bio = $(this).children('a').children('.biografia').html();
            var name = $(this).children('a').children('.nombre').html();
            var imagen = $(this).children('a').children('img').attr('src');
            var cargo = $(this).children('a').children('.cargo').html();

            $('.biografia-modal').empty().html(bio);
            $('.nombre-modal').empty().html(name);
            $('.imagen-modal').attr('src', '').attr('src', imagen);
            $('.cargo-modal').empty().html(cargo);

        });

        /**------ FORMULARIOS -------*/
        /**
         * DATEPIKER
         */
        $('.date-ensayo').datepicker({
            dateFormat : 'yy-mm-dd',
            minDate: new Date(2015, 01 - 1, 01),
            onSelect: function(dateText, inst) {
                window.dateInicio = dateText;
                $('.date-ensayo-fin').removeAttr("disabled");
           }
        });

        $('.date-ensayo-fin').datepicker({
            dateFormat : 'yy-mm-dd',
            minDate: new Date(2015, 01 - 1, 01)
        });

        /**
         * VALIDAR LIGAS DE ARCHIVOS
         */
        $('#form-ensayos').on('submit', function(event){
            event.preventDefault();
            var result_a = getValidateDocs('fotografias_ensayo');
            var result_b = getValidateDocs('lista_asistentes_ensayo');
            var result_c = getValidateDocs('compartir_documento_ensayo');

            if (result_a && result_b && result_c) {
                var form = document.getElementById("form-ensayos");
                form.submit();
            };

        });

        /**
         * VALIDAR LIGAS DE ARCHIVOS
         */
        $('#form-eventos').on('submit', function(event){
            event.preventDefault();
            var result_a = getValidateDocs('fotografia_evento');

            if (result_a) {
                var form = document.getElementById("form-eventos");
                form.submit();
            };
        });

        function getValidateDocs(id_object){
            var text = $('#'+id_object).val();
            var docs = /docs.google.com/.test(text);
            var dropbox = /dropbox.com/.test(text);
            var onedrive = /onedrive.live.com/.test(text);
            var driveGoogle = /drive.google/.test(text);


            if (docs || dropbox || onedrive || driveGoogle ) {
                return true;
            }else if(text == ''){
                return true;
            };

            $('#'+id_object).addClass('parsley-error');

            return false;

        }

        /**------ FORMULARIOS -------*/

        $('.nota-destacada a').on('click', function(event){
            event.preventDefault();
        });

        if( parseInt( isPageSondeo ) ){
            $('[data-parsley-certificado]').parsley();
        }
        if( parseInt( isPageParticipa ) ){
            addWordValidator();
            $('[data-parsley-certificado]').parsley();
            // $('.js-check-reference-code').submit(function(e){
            //     e.preventDefault();
            //     surveyExists( $('input[name="ref_code"]').val() );
            // });
        }

        imgToSvg();
        $('.js-video-wrapper').fitVids();

        if( parseInt( isPageCDMX ) ){
            createPieChart();
        }

        /*------------------------------------*\
            #GET/SET FUNCTIONS
        \*------------------------------------*/

        /**
         * Get header's height
         */
        function getHeaderHeight(){
            return $('header').outerHeight();
        }// getHeaderHeight

        /**
         * Set main's padding top
         */
        function setMainPaddingTop(){
            var headerHeight = getHeaderHeight();
            $('.main').css('padding-top', headerHeight);
        }// setMainPaddingTop

        setMainPaddingTop();

        $(window).scroll(function(){
            setMainPaddingTop();
        });

        $(window).resize(function(){
            setMainPaddingTop();
        });

        /*------------------------------------*\
            #GENERAL FUNCTIONS
        \*------------------------------------*/

        function imgToSvg(){
            $('img.svg').each(function(){
                var $img = $(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                $.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = $(data).find('svg');

                    // Add replaced image's ID to the new SVG
                    if(typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if(typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                    }

                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a').removeAttr('width').removeAttr('height');

                    // Replace image with new SVG
                    $img.replaceWith($svg);

                }, 'xml');

            });
        } //imgToSvg


        function createPieChart(){
            var ctx = $("#pie-data").get(0).getContext("2d");
            //pie chart data
            //sum of values = 360
            var data = [
                {
                    value: 60,
                    color: "#457390",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 14,
                    color: "#4b7c9c",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 14,
                    color: "#76a1bd",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 6,
                    color: "#d1d8e4",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 6,
                    color: "#363636",
                    highlight: "#222",
                    label: "nombre"
                }
            ];
            //draw
            new Chart(ctx).Pie(data);
        }

        if( parseInt( isHome ) ){

            $(window).scroll(function() {
                if ($(this).scrollTop() > 400){
                    $('header').addClass("sticky");
                }
                else{
                    $('header').removeClass("sticky");
                }
            });

        }

        $('.flex-prev, .flex-next').addClass('hidden-xs');

        $(window).scroll(function() {

            if( parseInt( isHome ) ){

                if ($(this).scrollTop() > 40){
                    $('header').addClass("sticky");
                }
                else{
                    $('header').removeClass("sticky");
                }
            }
        });

        if (document.getElementById("scroll") && document.getElementById("recorre")) {
            var recorre = $('#recorre').val();
            console.log(recorre);
            $('.scroll-cronologia').animate({
                scrollLeft: recorre
            }, 0);

        }

        $('#js-btn-cdmx a').click(function(e){
            e.preventDefault();
            toggleTwitter();
        })

        $('#js-hide-twitter').click(function(e){
            e.preventDefault();
            toggleTwitter();
        })

        function toggleTwitter(){
            if( $('.soy-cdmx').hasClass('js-hidden') ){
                $( ".soy-cdmx" ).animate({
                    right: "0"
                }, 500, function() {
                    $( ".soy-cdmx" ).removeClass('js-hidden');
                });

                return;
            }

            $( ".soy-cdmx" ).animate({
                right: "-370"
            }, 500, function() {
                $( ".soy-cdmx" ).addClass('js-hidden');
            });
        }

        function addWordValidator(){
            // minwords, maxwords, words extra validators
            var countWords = function (string) {
              return string
                  .replace( /(^\s*)|(\s*$)/gi, "" )
                  .replace( /\s+/gi, " " )
                  .split(' ').length;
            };

            window.Parsley.addValidator(
              'minwords',
              function (value, nbWords) {
                return countWords(value) >= nbWords;
              }, 32)
              .addMessage('en', 'minwords', 'This value needs more words');

            window.Parsley.addValidator(
              'maxwords',
              function (value, nbWords) {
                return countWords(value) <= nbWords;
              }, 32)
              .addMessage('en', 'maxwords', 'This value needs fewer words');

            window.Parsley.addValidator(
              'words',
              function (value, arrayRange) {
                var length = countWords(value);
                return length >= arrayRange[0] && length <= arrayRange[1];
              }, 32)
              .addMessage('en', 'words', 'This value has the incorrect number of words');
        }

        $('.mas-eventos').on('click', function(event){
            event.preventDefault();
            var data = $(this).attr('data-date');
            $(this).addClass('hidden');
            $('.date-'+data).removeClass('hidden').fadeOut(0).fadeIn(1200);
        });

        /**
        * Scrolling sub-sections
        */

        function smoothScrollTo(anchor, offset) {
            var duration= 1000; //time (milliseconds) it takes to reach anchor point
            var targetY = $(anchor).offset().top;
            $("body").animate({
                scrollTop : targetY - offset
            }, duration );
        }

        $(window).bind("load", function() {
            var hashURL = location.hash;
            if(hashURL != "" && hashURL.length > 1){
                smoothScrollTo(hashURL, 110);
            }
        });

        $('ul.dropdown-content > li > a').on('click', function(){
            var anchor = $(this).attr('href');
            var anchor = anchor.split('#');
            var anchorURLarray = anchor[0].split('/');
            var anchorLast = $(anchorURLarray).get(-2);

            var pathnameURL = location.pathname;
            var pathnameURLarray = pathnameURL.split('/');
            var pathnameURLarrayLast = $(pathnameURLarray).get(-2);

            console.log( pathnameURLarrayLast );
            console.log( anchorLast );

            if( anchorLast == pathnameURLarrayLast ){
                smoothScrollTo('#'+anchor[1], 140);
                return false;
            }

        });

    });

})(jQuery);