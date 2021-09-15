$(document).ready(function() {
	// Set the actual page
	$(`a.${actual_page}`).addClass('active');

	// Inicialize tooltips
	$('[data-bs-toggle="tooltip"]').tooltip();

	// Settings panel animation
	$(".open-settings").click(function() {
		$("#settings").toggle("slide", {direction: 'right'});
	});

	$(".close-settings").click(function() {
		$("#settings").toggle();
	});


	/***************************************
	          Keep tabs on reload
	***************************************/

	// Store the currently tab in the window.hash
	/*$("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
	  window.location.hash = $(e.target).attr("href").substr(1);
	});*/

	// Switch to the currently selected tab
	/*var current_tab = window.location.hash || null;
	if (current_tab) $(`.nav-tabs a[href="${current_tab}"]`).tab('show');*/

	/***************************************
		Dolar Price (exchangemonitor.net)
	***************************************/

	$.getJSON("https://exchangemonitor.net/ajax/widget-unique", {"country": "ve", "type": "enparalelovzla"}, function (data) {
		$('.dolarprice').text(`${data.price} Bs.`);
	});

	/***************************************
				Sales graphic
	***************************************/

	var salesGraph = $('#line-chart')[0].getContext('2d');

	// Gradient for background
	var gradientBlue = salesGraph.createLinearGradient(0, 230, 0, 50);
	gradientBlue.addColorStop(1, 'rgba(23, 184, 232,0.2)');
	gradientBlue.addColorStop(0.1, 'rgba(23, 184, 232,0.1)');
	gradientBlue.addColorStop(0, 'rgba(23, 184, 232,0)');
	
	new Chart(salesGraph, {
		type: 'line',
		data: {
			labels: ["Dom.", "Lun.", "Mar.", "Mie.", "Jue.", "Vie.", "Sab."],
			datasets: [{
				label: "Ventas de la semana",
				data: [50, 40, 300, 220, 500, 250, 400],
				tension: 0.3,
				pointRadius: 2,
				borderWidth: 3,
				borderColor: "#17B8E8",
				backgroundColor: gradientBlue,
				fill: true,
				maxBarThickness: 6
			}],
		},
		options: {
			responsive: true,
			scales: {
				y: {
					grid: {
						borderDash: [5, 5]
					},
					ticks: {
						padding: 10,
						color: '#b2b9bf',
						font: {
							size: 11,
							style: 'normal',
							lineHeight: 2
						},
					}
				}, x: {
					grid: {
						drawBorder: false,
						display: false,
						drawOnChartArea: false,
						drawTicks: false,
						borderDash: [5, 5]
					},
					ticks: {
						display: true,
						color: '#b2b9bf',
						padding: 20,
						font: {
							size: 11,
							lineHeight: 2
						},
					}
				},
			},
		}
	});

	/***************************************
               Datetime script
	***************************************/

	function getDateTime() {
        var date = new Date();
        var days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		var months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		var hour = date.getHours() % 12;
		var minutes = date.getMinutes();
		var session = (date.getHours() < 12 ? 'AM' : 'PM');

		// Adjust hours and minutes;
		hour = (hour < 10 ? `0${hour}` : hour);
		minutes = (minutes < 10 ? `0${minutes}` : minutes);

		return `<div>
			<span class="clock-day">${days[date.getDay()]}</span>
			<h1 class="hour">${hour}:${minutes} ${session}</h1>
			<span class="clock-date">${date.getDate()} de ${months[date.getMonth()]} del ${date.getFullYear()}</span>
		</div>`;
    }

    $('#digital-clock').html(getDateTime());
});