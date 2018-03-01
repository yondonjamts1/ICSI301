<html>
<head>
	<title>
		array test on PHP
	</title>
</head>
<body>
	<?php
	$student = array('fname' => "Bat",'lname'=> "Ariunaa",'id' => "14B1SEAS3333",'major' => "CT",'enrolment'=>"Web programming");
	// echo $student;
	// print($student['SISI']);
	// echo $student.
	print_r($student);
	echo "<br>";
	print_r($student);
	
	$information = Array(
		    [0] => Array(
		        [hotel_name] => Name,
		        // [info] => info
		        [rooms] => Array(
		                [0] => Array(
		                        [room_name] => name,
		                        [beds] => 2,
		                        [boards] => Array(
		                                [board_id] => 1,
		                                [price] =>200
		                            )
		                    )
		                )
		        )
		);
	echo "<br>";
	print_r($information);
	?>
</body>
</html>
