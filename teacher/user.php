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
<?php include_once "function/css_js.php" ?>
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>

<?php include_once "sidebar.php" ?>

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
					<div class="panel-heading">Add Class</div>
					<div class="panel-body">
					<form role="form" method="post" enctype="multipart/form-data" action="function/teacher.php">
						<div class="col-md-6">
						<input type="hidden" name="teacherid" value="<?php echo $_SESSION['teacher_id'];?>">
							<div class="form-group has-success">
								<label>Class</label>
								<input class="form-control"  type="text"  placeholder="Class" name="class">
							</div>
							<div class="form-group has-success">
								<label>Subject</label>
								<input class="form-control"  type="text"  placeholder="Subject" name="subject">
							</div>
							<div class="form-group has-success">
								<label>Video</label>
								<input class="form-control"  type="file"  placeholder="Video" name="video">
							</div>
					
						</div>
						<div class="col-md-6">
						
							<div class="form-group has-success">
								<label>Notes</label>
								<input class="form-control" type="file"  placeholder="Notes" name="notes">
							</div>
							<div class="form-group has-success">
								<label>Lession</label>
								<input class="form-control"  type="text"  placeholder="Lesson" name="lesson">
							</div>
							<input type="submit" class="btn btn-lg btn-success" value="Submit">

								<button type="button" class="btn btn-lg btn-danger">Cancel</button>
					    </div>
							</form>
						</div>
					</div>
					<span style="margin-right: 50%;">
					<?php
					if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					} 
					?></span>
					<br>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Teachers  List
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
                              <th>Class</th>
                              <th>File</th>
                              <th>Subject</th>
                              <th>Lession</th> 
                              <th>Video</th> 
                              <th>Action</td> 
                            </tr> 
                        </thead>
                            <tbody> 
                            <?php
								$teacherid = $_SESSION['teacher_id'];
                                $sql = "SELECT *  FROM student_panel WHERE teacherid= '$teacherid' AND status='1'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
									$count =1;
                                    while($row   = $result->fetch_assoc()) {
                                        $id      = $row["id"];
                                        $notes   = $row["notes"];
                                        $lession = $row["lession"];
                                        $class   = $row["class"];
                                        $video   = $row["video"];
                                        $subject = $row["subject"];
                                    ?>
                                        <tr> 
                                            <td><?php echo $count;?></td> 
                                            <td><?php echo $class;?></td> 
                                            <td><a href="function/<?php echo $notes;?>">Document</td> 
                                            <td><?php echo $subject;?></td> 
											<td><?php echo $lession;?></td> 
                                            <td><a href="function/<?php echo $video; ?>">Download Video</a></td> 
                                            <td> <a href="function/removeclass.php?removetid=<?php echo $id;?>">Delete</a></td> 
                                        </tr> 
                                <?php
								     $count =$count+1;
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