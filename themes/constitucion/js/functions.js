(function($){

	"use strict";

	$(function(){

		imgToSvg();

		$('.js-video-wrapper').fitVids();

	});

})(jQuery);

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


//Chart.js
//#piecanvas
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



//#piecanvas
var ctx = $("#bar-data").get(0).getContext("2d");
//pie chart data
//sum of values = 360
var data = {
	labels: ['Italy', 'UK', 'USA', 'Germany', 'France', 'Japan'],
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
//draw¡
var barChart = new Chart(ctx).Bar(data);