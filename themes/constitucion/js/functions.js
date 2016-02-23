(function($){

	"use strict";

	$(function(){

			/**
		 * home
		**/
		if (is_cdmx == 1) {
			/**
			 * On ready
			**/

			/**
			 * Triggered events
			**/

			//Chart.js

			//#mycanvas
			var ctx = $("#mycanvas").get(0).getContext("2d");
			//pie chart data
			//sum of values = 360
			var data = [
				{
					value: 46,
					color: "#f99134",
					highlight: "#f96234",
					label: "Local"
				},
				{
					value: 54,
					color: "#fff",
					highlight: "#fff",
					label: ""
				}
			];
			//draw
			var piechart = new Chart(ctx).Pie(data);

		};

	});

})(jQuery);