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
			<div class="container-fluid">
				<div class="row mt-5">
					<div class="col-12">
						<div class="table-responsive">
							<table class="table table-hover table-bordered table-dark">
							  <thead>
								<tr align="center">
								  <th scope="col">#</th>
								  <th scope="col">Name</th>
								  <th scope="col">Date</th>
								  <th scope="col">Format</th>
								  <th scope="col">Headline</th>
								  <th scope="col">Main Text</th>
								  <th scope="col">Image</th>
								  <th scope="col">Link Description</th>
								  <th scope="col">Edit/Preview/Share</th>
								  <th scope="col">Delete</th>
								</tr>
							  </thead>
							  <?php  
								if($response) {
									while($row = mysqli_fetch_array($response)){
										$sharelink = $domain.'/user.php?mainttl='.$row['headline'].'&maintxt='.$row['maintext'].'&imagsrc='.$row['imglink'].'&lnkdsc='.$row['linkdescription'].'&who='.$row['nume'].'&select_format='.$row['format'];
										echo '<tbody>';
										echo '	<tr align="center">';
										echo '		<td style="vertical-align: middle;">';
										echo 			$row['id'];
										echo '		</td>';
										echo '		<td style="vertical-align: middle;">';
										echo 			$row['nume'];
										echo '		</td>';
										echo '		<td style="vertical-align: middle; width:120px;">';
										echo 			$row['datap'];
										echo '		</td>';
										echo '		<td style="vertical-align: middle;">';
										echo 			$row['format'];
										echo '		</td>';
										echo '		<td class="edit" style="vertical-align: middle;">';
										echo '			<div>';
										echo 				$row['headline'];
										echo '				<form action="index.php" name="editHL" style="display: none;">';
										echo '					<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo '					<input type="text" name="hledit" class="hledit form-control" value="'.$row['headline'].'">';
										echo '					<button type="submit" name="editHeadLine" class="btn btn-success" value="">';
										echo '						<i class="fas fa-save"></i>';
										echo '					</button>';
										echo '				</form>';
										echo '				<a href="#" class="aedit openf" style="text-align: center;">';
										echo '					<i class="fas fa-edit"></i>';
										echo '				</a>';
										echo '			</div>';
										echo '		</td>';
										echo '		<td class="edit" style="vertical-align: middle;">';
										echo '			<div>';
										echo 				$row['maintext'];
										echo '				<form action="index.php" name="editMT" style="display: none;">';
										echo '					<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo '					<input type="text" name="mtedit" class="mtedit form-control" value="'.$row['maintext'].'">';
										echo '					<button type="submit" name="editMainText" class="btn btn-success" value="">';
										echo '						<i class="fas fa-save"></i>';
										echo '					</button>';
										echo '				</form>';
										echo '				<a href="#" class="aedit openf" style="text-align: center;">';
										echo '					<i class="fas fa-edit"></i>';
										echo '				</a>';
										echo '			</div>';
										echo '		</td>';
										echo '		<td class="edit" style="vertical-align: middle;">';
										echo '			<div>';
										echo '				<img src="'.$row['imglink'].'" style="max-width:200px;width:100%;max-height:100px;">';
										echo '				<form action="index.php" name="editIMG" style="display: none;">';
										echo '					<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo '					<input type="text" name="imgedit" class="imgedit form-control" value="'.$row['imglink'].'">';
										echo '					<button type="submit" name="editImgSrc" class="btn btn-success" value="">';
										echo '						<i class="fas fa-save"></i>';
										echo '					</button>';
										echo '				</form>';
										echo '				<a href="#" class="aedit openf" style="text-align: center;">';
										echo '					<i class="fas fa-edit"></i>';
										echo '				</a>';
										echo '			</div>';
										echo '		</td>';
										echo '		<td class="edit" style="vertical-align: middle;">';
										echo '			<div>';
										echo 				$row['linkdescription'];
										echo '				<form action="index.php" name="editLD" style="display: none;">';
										echo '					<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo '					<input type="text" name="ldedit" class="ldedit form-control" value="'.$row['linkdescription'].'">';
										echo '					<button type="submit" name="editLinkDesc" class="btn btn-success" value="">';
										echo '						<i class="fas fa-save"></i>';
										echo '					</button>';
										echo '				</form>';
										echo '				<a href="#" class="aedit openf" style="text-align: center;">';
										echo '					<i class="fas fa-edit"></i>';
										echo '				</a>';
										echo '			</div>';
										echo '		</td>';
										echo '		<td style="vertical-align: middle;">';	
										echo '			<a href="'.$sharelink.'" target="_blank">';
										echo '				This Link';
										echo '			</a>';
										echo '		</td>';
										echo '		<td style="vertical-align: middle;">';
										echo '			<form action="index.php" name="deletData">';
										echo '				<input type="hidden" name="trow" class="trow" value="'.$row['id'].'">';
										echo '				<button type="submit" name="delete" class="delete btn btn-warning" value="">';
										echo '					<i class="far fa-times-circle"></i>';
										echo '				</button>';
										echo '			</form>';
										echo '		</td>';
										echo '	</tr>';
										echo '</tbody>';
									}
								} else {
									echo 'Couldn\'t issue database query';
									echo mysqli_error($dbc);
								}
								echo '</table>';
								
								// Link Description edit
								if ( isset( $_GET['editLinkDesc'] ) ){
									
									$id 		= $_GET['trow'];
									$content 	= $_GET['ldedit'];
									
									$sql = "UPDATE links SET linkdescription='$content' WHERE id=$id";
									
									if ($dbc->query($sql) === TRUE) {
										
										echo "Edit record successfully";
										
									} else {
										
										echo "Error: " . $sql . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
								
								// Image edit
								if ( isset( $_GET['editImgSrc'] ) ){
									
									$id 		= $_GET['trow'];
									$content 	= $_GET['imgedit'];
									
									$sql = "UPDATE links SET imglink='$content' WHERE id=$id";
									
									if ($dbc->query($sql) === TRUE) {
										
										echo "Edit record successfully";
										
									} else {
										
										echo "Error: " . $sql . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
								
								// MainText edit
								if ( isset( $_GET['editMainText'] ) ){
									
									$id 		= $_GET['trow'];
									$content 	= $_GET['mtedit'];
									
									$sql = "UPDATE links SET maintext='$content' WHERE id=$id";
									
									if ($dbc->query($sql) === TRUE) {
										
										echo "Edit record successfully";
										
									} else {
										
										echo "Error: " . $sql . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
								
								// Headline edit
								if ( isset( $_GET['editHeadLine'] ) ){
									
									$id 		= $_GET['trow'];
									$content 	= $_GET['hledit'];
									
									$sql = "UPDATE links SET headline='$content' WHERE id=$id";
									
									if ($dbc->query($sql) === TRUE) {
										
										echo "Edit record successfully";
										
									} else {
										
										echo "Error: " . $sql . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
								
								
								// Delete row
								if ( isset( $_GET['delete'] ) ){
									
									$id = $_GET['trow'];
//									echo $id;
									
									$sqlD = "DELETE FROM links WHERE id=$id";
									
									if ($dbc->query($sqlD) === TRUE) {
										
										echo "Delete record successfully";
										
									} else {
										
										echo "Error: " . $sqlD . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
							?>
						</div>
						<div class="text-right pt-3">
							
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
							  <i class="fas fa-ban"></i> Clear table
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body text-center">
									Are you sure you want to DELETE the whole table?<br> This operation is irreversible. 
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								    <form action="index.php" name="deleteTable" method="post" style="display: inline-block;">
										<button type="submit" id="delTable" name="delTable" class="btn btn-danger">Delete</button>
								    </form>	
								  </div>
								</div>
							  </div>
							</div>
							<?php 
								// Delete all table
								if ( isset( $_POST['delTable'] ) ){

									$sqlDt = "DELETE FROM links";
									
									if ($dbc->query($sqlDt) === TRUE) {
										
										echo "Delete table successfully";
										
									} else {
										
										echo "Error: " . $sqlDt . "<br>" . $dbc->error;
										
									}	
									
									$dbc->close();
									
									echo "<script>window.location = '" . $domain	. "/index.php'</script>";
									
								}
							?>
							<form action="excel.php" method="post" style="display: inline-block;">
								<input type="submit" name="export_excel" class="btn btn-primary" value="Save excel">
							</form>	
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