<?php


			$bname = $_POST["byourname"];
			$broom = $_POST["bnumberofrooms"];
			$email = $_POST["bemail"];
			$bppl = $_POST["bnumberofpeople"];
			$bphn = $_POST["bphonenumber"];
			$bcin = $_POST["bcheckin"];
			$bcout = $_POST["bcheckout"];

			if(!($bname=="" || $broom<=0 || $email=="" || $bppl<=0 || $bphn=="" || $bcin=="0000-00-00" || $bcout=="0000-00-00")){
			$user = "root";
			$pass = "root";
			$db = "resort";
			$host = "localhost";


			$conn = @mysqli_connect($host,$user,$pass,$db) or die("Connection Failed");

			/*$query = "CREATE TABLE BOOKINGINFO(NAME VARCHAR(30), NUMBER_OF_ROOMS INTEGER(2), EMAIL VARCHAR(25), NUMBER_OF_PEOPLE INTEGER(2), PHNO VARCHAR(15), CHECKIN DATE, CHECKOUT DATE)";
			if($conn->query($query))
			{ echo(" Table created successfully."); } 
			else
			{ echo("Error creating table.");}*/
			$q1 = "INSERT INTO BOOKINGINFO(NAME, NUMBER_OF_ROOMS, EMAIL, NUMBER_OF_PEOPLE, PHNO, CHECKIN, CHECKOUT)
			VALUES('$bname','$broom','$email','$bppl','$bphn','$bcin','$bcout')";
			 if($conn->query($q1))
			 {
			 	header("Location:index.php");
			 }
			 else
			 {
			 	echo "DATA INSERTION FAILED";
			 }
			}
			else
			{
				echo "ENTER PROPER DATA";
			}






?>