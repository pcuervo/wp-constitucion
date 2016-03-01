(function($){

    "use strict";

    $(function(){

        if( parseInt( isPageSondeo ) ){
            //return;
        }

        imgToSvg();
        $('.js-video-wrapper').fitVids();

        if( parseInt( isPageCDMX ) ){
            createPieChart();
            createLineChart();
        }

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
                    color: "#e80e8a",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 10,
                    color: "#cccccc",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 10,
                    color: "#555",
                    highlight: "#222",
                    label: "nombre"
                },
                {
                    value: 20,
                    color: "#4a4a4a",
                    highlight: "#222",
                    label: "nombre"
                }
            ];
            //draw
            var piechart = new Chart(ctx).Pie(data);
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
                        fillColor: '#382765',
                        data: [2500, 1902, 1041, 610, 1245, 952]
                    },
                    {
                        label: '2014 customers #',
                        fillColor: '#7BC225',
                        data: [3104, 1689, 1318, 589, 1199, 1436]
                    }
                ]
            };
            var barchart = new Chart(ctx).Bar(data);
        }

        /*------------------------------------*\
            ANIMATED STICKY HEADER
        \*------------------------------------*/

        $(window).scroll(function() {

            if( parseInt( isHome ) ){

                if ($(this).scrollTop() > 400){
                    $('header').addClass("sticky");
                    $('header').removeClass("hidden");
                }
                else{
                    $('header').removeClass("sticky");
                    $('header').addClass("hidden");
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

        /**
         * MAPS
         */

        if (isHome == 1) {
            initialize();
        };


        function initialize() {

            var data_kioskos = [];
            var infoWindowContent = [];

            $.each( kioskos, function( key, value ) {
                var cada_uno = [value.name, value.lat, value.long];
                var data_uno = ['<div class="info_content"><h3>'+value.name+'</h3></div>'];
                data_kioskos.push(cada_uno);
                infoWindowContent.push(data_uno);

            });


            var map;
            var bounds = new google.maps.LatLngBounds();
            var mapOptions = {
                mapTypeId: 'roadmap',
                draggable: false,
                scrollwheel: false,
                zoom: 13
            };

            // Display a map on the page
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            map.setTilt(45);

            // Multiple Markers
            var markers = data_kioskos;

            // Display multiple markers on a map
            var infoWindow = new google.maps.InfoWindow(), marker, i;

            // Loop through our array of markers & place each one on the map
            for( i = 0; i < markers.length; i++ ) {
                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: markers[i][0]
                });

                // Allow each marker to have an info window
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[i][0]);
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }

            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
            var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                // this.setZoom(14);
                google.maps.event.removeListener(boundsListener);
            });

        }

        $('#js-btn-cdmx a').click(function(e){
            e.preventDefault();
            toggleTwitter();
        })

        $('#js-hide-twitter').click(function(e){
            e.preventDefault();
            toggleTwitter()
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
                right: "-350"
            }, 500, function() {
                $( ".soy-cdmx" ).addClass('js-hidden');
            });
        }

    });

})(jQuery);