<?php 
session_start();
include_once('db/dpconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Virtualclass - Dashboard</title>
<?php echo include_once "function/css_js.php" ?>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>

<?php echo include_once "sidebar.php" ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">12</div>
							<div class="text-muted">New class</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">3</div>
							<div class="text-muted">staff</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	
				
		<div class="panel panel-default">


		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Student  List
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
					<table class="table table-hover" id="myTable"> 
                         <thead> 
                            <tr> 
                              <th>#</th> 
                              <th>Name</th>
                              <th>Reg No</th>
                              <th>Class</th>
                              <th>Section</th> 
                              <th>E-mail</th> 
                              <th>Mobile</th>
                              <th>Action</td> 
                            </tr> 
                        </thead>
                            <tbody> 
                            <?php
                                $sql = "SELECT *  FROM student_details WHERE status='1'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row    = $result->fetch_assoc()) {
                                        $id                  = $row["id"];
                                        $Name                = $row["name"];
                                        $regno               = $row["regno"];
                                        $class               = $row["class"];
                                        $section             = $row["section"];
                                        $parent_email        = $row["email"];
                                        $parent_contact_no   = $row["mobile"];
                                    ?>
                                        <tr> 
                                            <td><?php echo $id;?></td> 
                                            <td><?php echo $Name;?></td> 
                                            <td><?php echo $regno;?></td> 
                                            <td><?php echo $class;?></td> 
                                            <td><?php echo $section;?></td> 
                                            <td><?php echo $parent_email;?></td> 
                                            <td><?php echo $parent_contact_no;?></td>
                                            <td> <a href="function/removestudent.php?remove=<?php echo $id;?>">Delete</a></td> 
 
                                        </tr> 
                                <?php
                                    }
                                }
                             ?>
                             
                            </tbody> 
                        </table>
					</div>
			
				</div>
			</div>
		

		</div><!--/.row-->
	</div>	<!--/.main-->
	

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
		
</body>
</html>