<?php session_start();?>
<?
	if(!isset($_SESSION['adminid']))
	{
		echo "<script>alert('Please login first'); location.href = 'login.php';</script>";
		exit;
	}
?>

<?

	$server = "mysql.comp.polyu.edu.hk";
	$user = "13068412d";
	$password = "intukqio";
	$database = "13068412d";
	$conn = mysql_connect($server,$user,$password) or die("Failed to connect the database!");
		
	mysql_select_db($database,$conn);
	
	//generate csv file
	$select = "SELECT * FROM comp3421_surveyanswers";
	
	$export = mysql_query ( $select ) or die ( "Sql error : " . mysql_error( ) );
	
	$fields = mysql_num_fields ( $export );
	$header = "";
	$data = "";
	
	for ( $i = 0; $i < $fields; $i++ )
	{
		$header .= mysql_field_name( $export , $i ) . ',' . "\t";
	}
	
	while( $row = mysql_fetch_row( $export ) )
	{
		$line = '';
		foreach( $row as $value )
		{                                            
			if ( ( !isset( $value ) ) || ( $value == "" ) )
			{
				$value = "\t";
			}
			else
			{
				//$value = str_replace( '"' , '""' , $value );
				$value = str_replace( '"' , '""' , $value );
				$value = $value . ',' . "\t";
			}
			$line .= $value;
		}
		$data .= trim( $line ) . "\n";
	}
	$data = str_replace( "\r" , "" , $data );
	
	if ( $data == "" )
	{
		$data = "\n(0) Records Found!\n";                        
	}
	
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=surveyresults.csv");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$header\n$data";	
?>
<?mysql_close();?>