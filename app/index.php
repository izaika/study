<?php
	foreach(glob('interfaces/*.php') as $file) {
		require $file;
	}
	foreach(glob('traits/*.php') as $file) {
		require $file;
	}
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
	echo '<h2>Create first faculty</h2>';
	$faculty1 = new Faculty('Elit');
	var_dump($faculty1);
	echo '<h2>Create first group</h2>';
	$group1 = new Group('EP-61', $faculty1);
	var_dump($group1);
	echo '<h2>Remove faculty from group</h2>';
	$group1->removeFaculty();
	var_dump($group1);
	echo '<h2>Add the group to the same faculty</h2>';
	$group1->setFaculty($faculty1);
	var_dump($group1);
	echo '<h2>Create students objects for group1</h2>';
	$student1	= new Student('Igor Zaika', '1989-12-19', Person::GENDER_MALE, false, $group1);
	$student2	= new Student('Lorem Ipsum', '1990-11-05', Person::GENDER_FEMALE, true, $group1);
	$student3	= new Student('Vehicula Sollicitudin', '1988-08-08', Person::GENDER_FEMALE, false, $group1);
	var_dump($group1);
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