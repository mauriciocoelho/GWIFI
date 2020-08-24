<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard.php">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Início</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Painel de Controle</h1>
		</div>
	</div><!--/.row-->

	
	<div class="row">
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<?php
						require('config/database_acad.php');
						$query="select count(id) as soma_usuarios from radcheck WHERE OP = ':='";
						$result=mysqli_query($db_link, $query);
						$row=mysqli_fetch_array($result);
						$soma=$row['soma_usuarios'];
					?>
					<h4>Acadêmicos</h4>
					<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $soma?>" ><span class="percent"><font color="#3F9BD5"><?php echo $soma?></font></span></div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<?php
						require('config/database_corporativa.php');
						$query="select count(id) as soma_usuarios from radcheck WHERE OP = ':='";
						$result=mysqli_query($db_link, $query);
						$row=mysqli_fetch_array($result);
						$soma=$row['soma_usuarios'];
					?>
                  	<h4>Corporativa</h4>
                  	<div class="easypiechart" id="easypiechart-orange" data-percent="<?php echo $soma?>" ><span class="percent"><?php echo $soma?></span></div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<?php
                       require('config/database.php');
                       $query="select count(id) as soma_usuarios from radcheck WHERE OP = ':='";
                       $result=mysqli_query($db_link, $query);
                       $row=mysqli_fetch_array($result);
                       $soma=$row['soma_usuarios'];
                  	?>
                    <h4>Professores</h4>
                    <div class="easypiechart" id="easypiechart-teal" data-percent="<?php echo $soma?>" ><span class="percent"><?php echo $soma?></span></div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<?php
	                    require('config/database_visitantes.php');
	                    $query="select count(id) as soma_usuarios from radcheck WHERE OP = ':='";
	                    $result=mysqli_query($db_link, $query);
	                    $row=mysqli_fetch_array($result);
	                    $soma=$row['soma_usuarios'];
                    ?>
                    <h4>Visitantes</h4>
                    <div class="easypiechart" id="easypiechart-red" data-percent="<?php echo $soma?>" ><span class="percent"><?php echo $soma?></span></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/chart.min.js"></script>
	<script src="assets/js/chart-data.js"></script>
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
		window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
	</script>

	<script type="text/javascript" src="assets/js/charts.loader.js"></script>
	<script type="text/javascript" src="assets/js/charts.loader2.js"></script>
	
	</body>
</html>