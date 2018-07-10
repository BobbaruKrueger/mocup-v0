<?php 
	require_once('mysqli_connect.php');
	$query		= "SELECT id, nume, datap, link FROM links";
	$response	= @mysqli_query($dbc, $query);

	$domain		= 'http://localhost';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
	
	<script></script>
</head>
<body>
	<div id="site-wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="mt-3 mb-4 text-center">
							<a href="index.php">
								Ads previewer
							</a>
						</h1>
					</div>
				</div>
			</div>
		</header>
		<section id="section1" class="subHeader">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div id="action" class="action">
							<div class="form-group row">
								<label for="select_format" class="col-12 col-sm-4 col-form-label">Select Format</label>
								<div class="col-12 col-sm-8">
									<select name="select_format" id="select_format" class="form-control">
										
									</select>
								</div>
							</div>
						</div>
						<div id="result" class="result">
							<!-- Format -->
							<div id="FacebookFeed" class="formats FacebookFeed">
								<h2>Facebook Feed</h2>
								<div class="finalRes">
									<div class="wrapper">
										<p class="mtext"></p>
										<img src="" alt="" class="img img-fluid">
										<div class="hl-ld">
											<h3 class="headline"></h3>
											<p class="linkdesc"></p>
										</div>
									</div>
								</div>
							</div>
							<div id="FacebookRightColumn" class="formats FacebookRightColumn">
								<h2>Facebook Right Column</h2>
								<div class="finalRes">
									<div class="wrapper">
										<img src="" alt="" class="img img-fluid">
										<h3 class="headline"></h3>
										<p class="linkdesc"></p>
									</div>
								</div>
							</div>
							<div id="FacebookInstantArticles" class="formats FacebookInstantArticles">
								<h2>Facebook Instant Articles</h2>
								<div class="finalRes">
									<div class="wrapper">
										<img src="" alt="" class="img img-fluid">
										<div class="hl-ld">
											<h3 class="headline"></h3>
											<p class="linkdesc"></p>
										</div>
									</div>
								</div>
							</div>
							<div id="AudienceNetworkNative" class="formats AudienceNetworkNative">
								<h2>Audience Network Native</h2>
								<div class="finalRes">
									<div class="wrapper">
										<div class="hl-ld">
											<h3 class="headline"></h3>
											<p class="linkdesc"></p>
										</div>
										<img src="" alt="" class="img img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div id="formW" class="formW">
							<?php 
								$mainttl 	= ( empty($_GET['mainttl']) ? '' : $_GET['mainttl'] );
								$maintxt	= ( empty($_GET['maintxt']) ? '' : $_GET['maintxt'] );
								$imagsrc	= ( empty($_GET['imagsrc']) ? '' : $_GET['imagsrc'] );
								$lnkdsc		= ( empty($_GET['lnkdsc']) ? '' : $_GET['lnkdsc'] );
								$who 		= ( empty($_GET['who']) ? '' : $_GET['who'] );
							?>
							<form action="index.php" name="saveData" id="saveData">
								<div class="form-group row">
									<label for="mainttl" class="col-12 col-sm-4 col-form-label">Headline<span id="hch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control" id="mainttl" name="mainttl" value="<?php echo $mainttl; ?>" placeholder="Headline" maxlength="25">
									</div>
								</div>
								<div class="form-group row">
									<label for="maintxt" class="col-12 col-sm-4 col-form-label">Main Text<span id="mtch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control" id="maintxt" name="maintxt" value="<?php echo $maintxt; ?>" placeholder="Main Text" maxlength="125">
									</div>
								</div>
								<div class="form-group row">
									<label for="imagsrc" class="col-12 col-sm-4 col-form-label">Image</label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control" id="imagsrc" name="imagsrc" value="<?php echo $imagsrc; ?>" placeholder="Image link">
									</div>
								</div>
								<div class="form-group row">
									<label for="lnkdsc" class="col-12 col-sm-4 col-form-label">Link Description<span id="ldch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control" id="lnkdsc" name="lnkdsc" value="<?php echo $lnkdsc; ?>" placeholder="Link Description" maxlength="30">
									</div>
								</div>
								<div class="form-group row">
									<label for="who" class="col-12 col-sm-4 col-form-label">Name</label>
									<div class="col-12 col-sm-6">
										<input type="text" class="form-control" id="who" name="who" value="<?php echo $who; ?>" placeholder="Name" maxlength="30">
									</div>
									<div class="col-12 col-sm-2 text-right">
										<input type="hidden" id="prevBtn" class="btn btn-primary" value="Preview">
										<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save">
									</div>
								</div>
							</form>
							<?php
								
								$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
								$actual_linkWOs = explode('&submit', $actual_link);
								$actual_linkT = $actual_linkWOs[0];
//								print_r( $actual_linkWOs );
							
								if ( isset( $_GET['submit'] ) ){
									
									$sqlI = "INSERT INTO links (nume, link) VALUES ('".$_GET["who"]."', '".$actual_linkT."')";
									
									if ($dbc->query($sqlI) === TRUE) {
										
										echo "New record created successfully";
										
									} else {
										
										echo "Error: " . $sqlI . "<br>" . $dbc->error;
										
									}	
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/mocupwdb/index.php'</script>";
								}
							
							?>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-12">
						<div class="table-responsive">
							<table class="table table-hover table-dark">
							  <thead>
								<tr align="center">
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								  <th scope="col">Date</th>
								  <th scope="col">Link</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <?php  
								if($response) {
									while($row = mysqli_fetch_array($response)){
										echo '<tbody>';
										echo '	<form action="index.php" name="deletData">';
										echo '		<tr align="center">';
										echo '			<th scope="row" style="vertical-align: middle;">';
										echo '				<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo 				$row['id'];
										echo '			</th>';
										echo '			<td style="vertical-align: middle;">';
										echo 			$row['nume'];
										echo '			</td>';
										echo '			<td style="vertical-align: middle;">';
										echo 				$row['datap'];
										echo '			</td>';
										echo '			<td style="vertical-align: middle;">';											
										echo '				<a href="'.$row['link'].'" target="_blank">';
//										echo 					$row['link'];
										echo '					Link';
										echo '				</a>';
										echo '			</td>';
										echo '			<td style="vertical-align: middle;">';
										echo '				<input type="hidden" name="delrow" class="delrow">';
										echo '				<button type="submit" name="delete" class="delete" class="btn btn-warning" value="">';
										echo '					<i class="far fa-times-circle"></i>';
										echo '				</button>';
										echo '			</td>';
										echo '		</tr>';
										echo '	</form>';
										echo '</tbody>';
									}
								} else {
									echo 'Couldn\'t issue database query';
									echo mysqli_error($dbc);
								}
								echo '</table>';
								
								
								
								
								
								if ( isset( $_GET['delete'] ) ){
									
									$idD = $_GET['trow'];
									echo $idD;
									
									$sqlD = "DELETE FROM links WHERE id=$idD";
									
									if ($dbc->query($sqlD) === TRUE) {
										
										echo "Delete record successfully";
										
									} else {
										
										echo "Error: " . $sqlD . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/mocupwdb/index.php'</script>";
									
								}
							?>
						</div>
						<div class="text-right pt-3">
							<form action="excel.php" method="post">
								<input type="submit" name="export_excel" class="btn btn-primary" value="Save excel">
							</form>	
							<?php
							
								
							
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="footer" class="siteFooter">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">
						<p>
							Bogdan Stanila @FXORO | 
							<a href="https://github.com/BobbaruKrueger" target="_blank">BobbaruKrueger</a> | 
							<a href="https://github.com/BobbaruK" target="_blank">BobbaruK</a> | 
						</p>
					</div>
				</div>
			</div>			
		</footer>
	</div>
	
	
	

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>

	<script src="js/vanilla-scripts.js"></script>
	<script src="js/jquery-scripts.js"></script>
	
</body>
</html>