<?php 
	require_once('mysqli_connect.php');
	$query		= "SELECT id, nume, datap, headline, maintext, imglink, linkdescription, format FROM links";
	$response	= @mysqli_query($dbc, $query);

	$domain		= 'http://localhost/mocupwdb';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title></title>
	
	<script>
		<?php 
			$vrSel 	= ( empty($_GET['select_format']) ? '' : $_GET['select_format'] );
		?>
		var selectVar = '<?php echo $vrSel ?>'; 
	</script>
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
				<form action="index.php" name="saveData" id="saveData">
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
							
								<div class="form-group row">
									<label for="mainttl" class="col-12 col-sm-4 col-form-label">Headline<span id="hch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control dis" id="mainttl" name="mainttl" value="<?php echo $mainttl; ?>" placeholder="Headline" maxlength="25">
									</div>
								</div>
								<div class="form-group row">
									<label for="maintxt" class="col-12 col-sm-4 col-form-label">Main Text<span id="mtch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control dis" id="maintxt" name="maintxt" value="<?php echo $maintxt; ?>" placeholder="Main Text" maxlength="125">
									</div>
								</div>
								<div class="form-group row">
									<label for="imagsrc" class="col-12 col-sm-4 col-form-label">Image (<a href="https://imghost.io" target="_blank">Imghost</a>)</label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control dis" id="imagsrc" name="imagsrc" value="<?php echo $imagsrc; ?>" placeholder="Image link">
									</div>
								</div>
								<div class="form-group row">
									<label for="lnkdsc" class="col-12 col-sm-4 col-form-label">Link Description<span id="ldch"></span></label>
									<div class="col-12 col-sm-8">
										<input type="text" class="form-control dis" id="lnkdsc" name="lnkdsc" value="<?php echo $lnkdsc; ?>" placeholder="Link Description" maxlength="30">
									</div>
								</div>
								<div class="form-group row">
									<label for="who" class="col-12 col-sm-4 col-form-label">Name</label>
									<div class="col-12 col-sm-6">
										<input type="text" class="form-control" id="who" name="who" value="<?php echo $who; ?>" placeholder="Your name" maxlength="30">
									</div>
									<div class="col-12 col-sm-2 text-right">
										<input type="hidden" id="prevBtn" class="btn btn-primary" value="Preview">
										<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Save">
									</div>
								</div>
							
							<?php
								
								// Save
								if ( isset( $_GET['submit'] ) ){
									
									$sqlI = "INSERT INTO links (nume, headline, maintext, imglink, linkdescription, format) VALUES ('".$_GET["who"]."', '".$_GET["mainttl"]."', '".$_GET["maintxt"]."', '".$_GET["imagsrc"]."', '".$_GET["lnkdsc"]."' , '".$_GET["select_format"]."' )";
									
									
									
									if ($dbc->query($sqlI) === TRUE) {
										
										echo "New record created successfully";
										
									} else {
										
										echo "Error: " . $sqlI . "<br>" . $dbc->error;
										
									}	
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";

								}
							
							?>
						</div>
					</div>
				</div>
			</div>
			</form>
		</section>
		<footer id="footer" class="siteFooter">
			<div class="container">
				<div class="row">
					<div class="col-12 pt-5">
						<p>
							Bogdan Stanila @FXORO | 
							<a href="https://github.com/BobbaruKrueger" target="_blank">BobbaruKrueger</a> | 
							<a href="https://github.com/BobbaruK" target="_blank">BobbaruK</a>
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