<?php
	foreach(glob('classes/*.php') as $file) {
		require $file;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>University</title>
	</head>
	<body>
		<h1>University application</h1>
<?php
//	$student1	= new Student('Igor Zaika', '1989-12-19', Person::GENDER_MALE, false);
//	$student2	= new Student('Lorem Ipsum', '1990-11-05', Person::GENDER_FEMALE, true);
//	$student3	= new Student('Vehicula Sollicitudin', '1988-08-08', Person::GENDER_FEMALE, false);
//
//	$teacher1	= new Teacher()
//	$group1		= new Group('MINDK-2017', [$student1, $student2]);
//	var_dump($group1);
//	echo '<h2>Add one more student dynamically</h2>';
//	$group1->add_student($student3);
//	var_dump($group1);
//	echo '<h2>Remove middle student dynamically</h2>';
//	$group1->remove_student($student2);
//	var_dump($group1);
?>
	</body>
</html>