<?php
error_reporting(E_ALL);
	function ExecuteQuery ($sql)
	{	
		$con=mysqli_connect ("localhost","root","","tech_forum");
		mysqli_select_db ($con,"tech_forum");
		
		$rows = mysqli_query ($con,$sql);
		
		mysqli_close ($con);
		
		return $rows;
	}
	
	function ExecuteNonQuery ($sql)
	{
		$con=mysqli_connect ("localhost","root","","tech_forum");
		mysqli_select_db ($con,"tech_forum");
		
		$result = mysqli_query ($con,$sql);
		
		mysqli_close ($con);
		
		return $result;
	}
?>