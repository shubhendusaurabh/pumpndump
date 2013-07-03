var opts = {
  lines: 13, // The number of lines to draw
  length: 20, // The length of each line
  width: 10, // The line thickness
  radius: 30, // The radius of the inner circle
  corners: 1, // Corner roundness (0..1)
  rotate: 0, // The rotation offset
  direction: 1, // 1: clockwise, -1: counterclockwise
  color: '#000', // #rgb or #rrggbb
  speed: 1, // Rounds per second
  trail: 60, // Afterglow percentage
  shadow: true, // Whether to render a shadow
  hwaccel: false, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: 'auto', // Top position relative to parent in px
  left: 'auto' // Left position relative to parent in px
};
var target = document.getElementById('placeholder');
var spinner = new Spinner(opts).spin(target);

$(function (){
	$.ajax({
		url: './ajaxCall',
		type: 'POST',
		dataType: 'json',
		success: function(data){
			console.log(data);
			spinner.stop(target);
			data.unshift(["Start", 0]);
			
			$.plot($("#placeholder"), [data], {
				series: {
					points: {
						show: true,						
						radius: 5
					},
					lines: {
						show: true
					},
					shadowSize: 0,
					color: '#71c73e'
				},
				grid: {
					color: '#646464',
					//borderColor: 'transparent',
					borderWidth: 2,
					clickable: true,
					hoverable: true
					
				},
				xaxis: {
					mode: "categories",
					minTickSize: 5
				},
				yaxis: {
					tickSize: 100,
					min: 0,
					max: 1000
				}
			});
		}
	});
	/*
	
	
	*/
	function showTooltip(x, y, contents) {
		$('<div id="tooltip">' + contents + '</div>').css({
			top: y - 16,
			left: x + 20,
			position: "absolute",
			display: "none",
			border: "1px solid #fdd",
			padding: "2px",
			"background-color": "#fee",
			opacity: 0.80
		}).appendTo('body').fadeIn();
	}

	var previousPoint = null;

	$('#placeholder').bind('plothover', function (event, pos, item) {
		if (item) {
			if (previousPoint != item.dataIndex) {
				previousPoint = item.dataIndex;
				$('#tooltip').remove();
				var x = item.datapoint[0],
					y = item.datapoint[1];
					console.log(item.series.xaxis.categories);
					showTooltip(item.pageX, item.pageY, item.series.data[previousPoint][0] + " = " + y);
			}
		} else {
			$('#tooltip').remove();
			previousPoint = null;
		}
	})
	$('.semester').click(function(e){
			$('#placeholder').empty();
			spinner.spin(target);
			semester = $(this).data('semester');
			$.ajax({
				url: './ajaxCall/'+semester,
				type: 'POST',
				dataType: 'json',
				success: function(data){
					console.log(data);
					spinner.stop();
					$.plot($("#placeholder"), [data], {
						series: {
							bars: {
								show: true,
								barWidth: 0.6,
								align: "center",
								lineWidth: 1,
								fill: true,
								fillColor: { colors: [{opacity: 1}, {opacity: 0.2}]}
								
							},
							shadowSize: 0,
							color: '#77b7c5'
						},
						grid: {
							color: '#646464',
							//borderColor: 'transparent',
							//backgroundColor: { colors: ["#000", "#999"]},
							borderWidth: 2,
							hoverable: true
						},
						xaxis: {
							mode: "categories",
							tickColor: 'transparent',
							tickLength: 0							
						},
						yaxis: {
							tickSize: 25,
							max: 150
						}
					});
			}
		});
		e.preventDefault();
	});
});