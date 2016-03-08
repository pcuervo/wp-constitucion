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
            $("body").animate({scrollTop: $('#js-home-scroll-point').position().top - 80 }, '700');
        });

        /**
        * Scrolling sub-sections
        */

        function smoothScrollTo(anchor) {
            var duration= 1000; //time (milliseconds) it takes to reach anchor point
            var targetY = $(anchor).offset().top;
            console.log(targetY);
            $("body").animate({
                scrollTop : targetY - 100
            }, duration );
        }

        var hashURL = location.hash;
        if(hashURL != "" && hashURL.length > 1){
            smoothScrollTo(hashURL);
        }

        $('ul.dropdown-content>li>a').on('click', function(){
            var anchor = $(this).attr('href');
            var anchor = anchor.split("#");
            smoothScrollTo('#'+anchor[1]);
            return false;
        });





        /**
         * INIT FLEXSLIDER
         */
        $('.flexslider').flexslider({
            animation: "slide"
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
            minDate: 0,
            onSelect: function(dateText, inst) {
                window.dateInicio = dateText;
                $('.date-ensayo-fin').removeAttr("disabled");
           }
        });

        $('.date-ensayo-fin').datepicker({
            dateFormat : 'yy-mm-dd',
            minDate: 0
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

            if (docs || dropbox || onedrive ) {
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
            $('.js-check-reference-code').submit(function(e){
                e.preventDefault();
                surveyExists( $('input[name="ref_code"]').val() );
            });
        }

        imgToSvg();
        $('.js-video-wrapper').fitVids();

        if( parseInt( isPageCDMX ) ){
            createPieChart();
            createLineChart();
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
                    value: 15,
                    color: "#d1d8e4",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 25,
                    color: "#363636",
                    highlight: "#222",
                    label: "nombre"
                }
            ];
            //draw
            new Chart(ctx).Pie(data);
        }

        function createLineChart(){
            //#piecanvas
            var ctx = $("#bar-data").get(0).getContext("2d");
            //pie chart data
            //sum of values = 360
            var data = {
                labels: ['dato', 'dato', 'dato', 'dato', 'dato', 'dato'],
                datasets: [
                    {
                        label: '2010 customers #',
                        fillColor: '#457390',
                        data: [2500, 1902, 1041, 610, 1245, 952]
                    },
                    {
                        label: '2014 customers #',
                        fillColor: '#363636',
                        data: [3104, 1689, 1318, 589, 1199, 1436]
                    }
                ]
            };
            new Chart(ctx).Bar(data);
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

        function surveyExists( refCode ){
            console.log( refCode );
            $.post(
                ajax_url,
                {
                    reference_code:     refCode,
                    action:             'survey_exists'
                },
                function( response ){
                    if( '0' == response ){
                        alert( 'No existe ninguna encuesta con folio: ' + refCode );
                        return;
                    }
                    $('.js-codigo-referencia span').text( response );
                    $('#modal-agradecimiento').modal('toggle');
                    $('input[name="referencia"]').val( response )
                }
            );
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

    });

})(jQuery);