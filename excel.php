<?php 

	require_once('mysqli_connect.php');

	$output = '';

	if ( isset( $_POST['export_excel'] ) ) {

		$sqlE = "SELECT * FROM links ORDER BY id ASC";
		$result = @mysqli_query($dbc, $sqlE);

		if ( mysqli_num_rows( $result ) > 0 ) {
			
			$output .= '<table class="table" bordered="1">';
			$output .= '	<tr>';
			$output .= '		<th>Id</th>';
			$output .= '		<th>Name</th>';
			$output .= '		<th>Date</th>';
			$output .= '		<th>Link</th>';
			$output .= '	</tr>';
		}

		while ( $row = mysqli_fetch_array($result) ) {
			
			$output .= '<tr>';
			$output .= '	<td>';
			$output .=			$row['id'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['nume'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['datap'];
			$output .= '	</td>';
			$output .= '	<td>';
			$output .=			$row['link'];
			$output .= '	</td>';
			$output .= '</tr>';
			
		}
		
		$output .= '</table>';
		
		header("Content-Type: application/xls");    
		header("Content-Disposition: attachment; filename=adsPreview.xls");  
		header("Pragma: no-cache"); 
		header("Expires: 0");
		
		echo $output;

	}
?>