<?php
      
	$conn=new mysqli("localhost","root","","db");
	$name=$_POST["name"];
	if($conn->connect_error)
	{
	   echo "unsucess";
	   die($conn->connect_error);
	}

	$sql="select * from pers where emp_name='$name'";
	$res=$conn->query($sql);
	
	if($res->num_rows>0)
	{
	    while($val=$res->fetch_assoc())
	    {
	       echo "emp_id:".$val['emp_id']."emp_name:".$val['emp_name']."d_no:".$val['d_no']."sal:".$val['salary'];
	    }
	}
	else
	{
	   echo "nrf";
	}
	$conn->close();

?>
