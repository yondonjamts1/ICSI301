<?php
$student[] = array(
	'lname' => 'Ganzorig',
	'fname' => 'Yondonjamts',
	'sisi' => '14b1seas3732',
	'major' => 'communication technology',
	'couse' => array(
		array(
			'cname' => 'Web Programming',
			'index' => 'ICSI301',
			'credit' => 3
		) ,
		array(
			'cname' => 'Research',
			'index' => 'ECEN393',
			'credit' => 2
		) ,
		array(
			'cname' => 'Computing',
			'index' => 'COMP100',
			'credit' => 3
		)
	)
);
$student[] = array(
	'lname' => 'Gombo',
	'fname' => 'Chimgee',
	'sisi' => 'se1234',
	'major' => 'software engineer',
	'couse' => array(
		array(
			'cname' => 'Internet',
			'index' => 'ICSI204',
			'credit' => 3
		) ,
		array(
			'cname' => 'Programming',
			'index' => 'ICSI201',
			'credit' => 3
		) ,
		array(
			'cname' => 'algorithm',
			'index' => 'ICSI101',
			'credit' => 3
		)
	)
);
$student[] = array(
	'lname' => 'Dondog',
	'fname' => 'Hurlee',
	'sisi' => 'se1235',
	'major' => 'software engineer',
	'couse' => array(
		array(
			'cname' => 'Internet',
			'index' => 'ICSI204',
			'credit' => 3
		) ,
		array(
			'cname' => 'Programming',
			'index' => 'ICSI201',
			'credit' => 3
		) ,
		array(
			'cname' => 'algorithm',
			'index' => 'ICSI101',
			'credit' => 3
		)
	)
);

// print_r($student);

$songoson_couse = array(
	array(
		'cname' => 'English',
		'index' => 'ICSI204',
		'credit' => 3
	) ,
	array(
		'cname' => 'Physics',
		'index' => 'ICSI201',
		'credit' => 3
	) ,
	array(
		'cname' => 'Geology',
		'index' => 'ICSI101',
		'credit' => 3
	)
);

function search($student, $name)
{
	foreach($student as $negoyutan)
	{
		if ($negoyutan['fname'] == 'Bat')
		{
			$sisi = $negoyutan['sisi'];
		}
	}

	$result = 'Name is: ' . $name . ', sisi is: ' . $negoyutan['sisi'];
	return $result;
}

echo search($student, 'Chimgee');
echo '<br />------------------------------<br />';

function addLesson($sisi, $songoson_couse, $student)
{
	for ($i = 0; $i < count($student); $i++)
	{
		if ($student[$i]['sisi'] == $sisi)
		{
			$student[$i]['couse'] = array_merge($songoson_couse, $student[$i]['couse']);
		}
	}

	return $student;
}

print_r(addLesson('se1231', $songoson_couse, $student));

function cmp($a, $b)
{
	if ($a == $b)
	{
		return 0;
	}

	return ($a < $b) ? -1 : 1;
}

$a = array(
	3,
	2,
	5,
	6,
	1
);
usort($student, "cmp");

function show($student)
{
	$newTable = ' ';
	foreach($student as $negoyutan)
	{
		$newTable.= '<tr><td>' . $negoyutan['lname'] . '</td>';
		$newTable.= '<td>' . $negoyutan['fname'] . '</td>';
		$newTable.= '<td>' . $negoyutan['sisi'] . '</td>';
		$newTable.= '<td>' . $negoyutan['major'] . '</td>';
		$newTable.= '<td>';
		foreach($negoyutan['couse'] as $eachcouse)
		{
			$newTable.= '<b>cname:</b> ' . $eachcouse['cname'];
			$newTable.= '<b> index:</b> ' . $eachcouse['index'] . '<br />';
		}

		$newTable.= '</td></tr>';
	}

	return $newTable;
}

?>
<br />------------------------------
<br />
<table border="1">
    <tr>
        <td>lname</td>
        <td>fname</td>
        <td>sisi</td>
        <td>major</td>
        <td>couse</td>
    </tr>
    <tr>
        <?php
echo show($student);
?>
    </tr>
</table>