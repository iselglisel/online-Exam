<?php 
	require_once 'ExamDAO.php';
	include 'config.php';
	$num = $_GET['num'];
	$answer = $_GET['answer'];
	$num_answer = $_GET['num_answer'];
	$rows = ExamDAO::getOption($num);
	// $score = ExamDAO::getAnswer($num_answer, $answer);	

	echo json_encode(
		array(
			'id' => $rows['id'],
			'quest' => $rows['questionnaire'],
			'A' => $rows['opt1'],
			'B' => $rows['opt2'],
			'C' => $rows['opt3'],
			'D' => $rows['opt4']
			// 'score' => $score
			)
		);
 ?>