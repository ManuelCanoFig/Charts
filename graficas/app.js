$(document).ready(function(){
	$.ajax({
		url:"http://localhost/chart/graficas/Chart1.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var id = [];
			var dato =[];
			for(var i in data){
				id.push("id"+data[i].id);
				dato.push(data[i].dato);
			}
			var chartdata ={
				labels: id,
				datasets: [
					{
						label : [
							"Datos"
						],
						backgroundColor: [
						"#F7464A",
						"#46BFBD",
						"#FDB45C",
						"#949FB1",
						"#4D5360",
					    ],
						data: dato
				    }
				]
			};
			var canvas = document.getElementById('chart').getContext('2d');
			window.pie = new Chart(canvas,{
				type: 'pie',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);
		}
	});
});