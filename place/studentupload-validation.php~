<?php
	//$sem=$_POST["sem"];
	$fname=$_FILES['file']['name'];
	if(!isset($fname))
	{
		echo "File not able to upload!Please try again!";
	}
	else if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} 
	else 
	{
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$temp="student".".".$ext;
		$mov=move_uploaded_file($_FILES['file']['tmp_name'],"uploads/$temp");
		//save and rename files to a new folder 
		

		include 'Classes/PHPExcel/IOFactory.php';
		
			$inputFileType = 'Excel2007';
			//$sem=$_POST["sem"];
			$fname=$_FILES['file']['name'];
			$ext = pathinfo($fname, PATHINFO_EXTENSION);
			$temp="student".".".$ext;
			//get file from the saved folder
						
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load("uploads/".$temp);

			$sheet = $objPHPExcel->setActiveSheetIndex(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();
			$x=1;
			//$con=mysqli_connect("localhost","root","","timetable");
			require_once('dbconnector.php');
			//$stmt=$con->prepare("INSERT into student(usn, dept, name, counsellor, sem, pw) values(?,?,?,?,?,?)");
			//$stmt->bind_param("ssssss",$usn,$dept,$name,$counsellor,$sem,$pw);
			
			
				$l="A".$x;
				$m="B".$x;
				$n="C".$x;
				$o="D".$x;
				$p="E".$x;
				$q="F".$x;
				$r="G".$x;
				$s="H".$x;
				$t="I".$x;
				$u="J".$x;
				
				$usn=$sheet->getCell($l)->getValue();
				$name=$sheet->getCell($m)->getValue();
				$branch=$sheet->getCell($n)->getValue();
				//$counsellor=$sheet->getCell($o)->getValue();
				$email=$sheet->getCell($o)->getValue();
				$pass=$sheet->getCell($p)->getValue();
				$pass1=$sheet->getCell($q)->getValue();
				$phone=$sheet->getCell($r)->getValue();
				$cgpa=$sheet->getCell($s)->getValue();
				$tenth=$sheet->getCell($t)->getValue();
				$puc=$sheet->getCell($u)->getValue();
				//echo $usn."\n".$name;
				//$stmt->execute();
				$pass=md5($pass);
				$query=$sql = "INSERT INTO student (NAME,USN,BRANCH,EMAIL,PASWORD,PHONE,CGPA,TENTH,TWELTH) VALUES 
				('$name','$usn','$branch','$email','$pass','$phone','$cgpa','$tenth','$puc')";
				$result=mysqli_query($con,$query);
				//$x=$x+1;
				//echo $x;
			
			

	}
		if($result)
	{
		echo "You have successfully registered...  Login to Continue...";
		header("location:home.html");
	}
	else
	{
		echo "Enter the valid details";
		//header("location:stsignup.html");
	}

?> 
