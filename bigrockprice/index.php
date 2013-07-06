<?php 
require_once 'controller.php';
$control = new Controller();
require_once 'views/header.php';
?>

		Here you will see the graph
		<div id="chart1"> </div>
		<div id="chart_container">
			<div id="chart"> </div>
			<div id="legend_container">
				<div id="smoother" title="Smoothing"> </div>
				<div id="legend"> </div>
			</div>
			<div id="slider"> </div>
		</div>
<?php 
// require_once('database.php');
// $domains = get_domains();
// 
// foreach($domains as $domain){
	// $temp = get($domain['domain']);
	// //var_dump($temp);
	// $lol = array();
	// foreach($temp as $t){
// 		
		// $arr['y'] = intval($t['price']);
		// $arr['x'] = strtotime($t['time']);
		// $lol[] = $arr;
	// }
	// //$data['data'] = $temp;
	// $data['data'] = $lol;
	// $data['color'] = "#c05020";
	// $data['name'] = $domain['domain'];
	// $s[] = $data;
// }
// //var_dump($data);
// echo json_encode($s);
?>
		<script>
			
			
			var seriesData = [<?php //echo json_encode($data); ?>];
			

			var graph = new Rickshaw.Graph({
				element : document.getElementById("chart"),
				width : 960,
				height : 500,
				renderer : 'line',
				series : <?php echo $control->get_data(); ?>
				
			});
			//console.log(series);
			graph.render();

			var hoverDetail = new Rickshaw.Graph.HoverDetail({
				graph : graph
			});

			var legend = new Rickshaw.Graph.Legend({
				graph : graph,
				element : document.getElementById('legend')

			});

			var shelving = new Rickshaw.Graph.Behavior.Series.Toggle({
				graph : graph,
				legend : legend
			});

			var axes = new Rickshaw.Graph.Axis.Time({
				graph : graph
			});
			axes.render();
			
		</script>
<?php require_once 'views/footer.php';?>