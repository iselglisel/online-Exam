<?php
require_once('config.php');
require_once('ExamDAO.php');

define('QUESTION_NUMBERS', 10);
$questionnaire = (isset($_POST['questionnaire']))? $_POST['questionnaire']+1 : 1;
$answers = (isset($_POST['answers']))? $_POST['answers']: '';
$answer = (isset($_POST['a']))? $_POST['a']: '';
$answers .= $answer;

if($questionnaire > QUESTION_NUMBERS){
	session_start();
	$_SESSION['answers'] = $answers;
	header('Location: result.php');
}

$choice = ExamDAO::getOption($questionnaire);
foreach($choice as $value):
?>
<html>
<head>
	<title>Questionnaire</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/questyle.css">
	
</head>
<body>
	<div class="span12">
		<div class="row">
			<div class="navbar navbar-fixed-top">
        		<div class="navbar-inner">
          			<div class="container">
            			<a href="index.html" class="brand brand-bootbus">Examination</a>
            				<div class="nav-collapse collapse">        
              					<ul class="nav pull-right">
				                 <li><a href="frontface.php">Home</a></li>           
				                 <li><a href="signOut.php">Sign Out</a></li>
              					</ul>
            				</div>
          			</div>
        		</div>
      		</div>
      	</div>
     </div>
	<div class="span8" style="margin-top:2in">
		<div class="row">
			<span style="font-size:20px;" id = "timer"></span>
			<div class="well" id = "submit">
				<form action = "<?= $_SERVER['PHP_SELF']?>" method = 'POST'>	
					<input type="hidden" name="answers" value='<?= $answers ?>'>
					<input type="hidden" name="questionnaire" value='<?= $questionnaire ?>'>
				
					<font face="Century Gothic" size="5px">Question : <?= $value['id'] ?>&nbsp;</font><font color="black" font face="Century Gothic" id = "tanong"><?= $value['questionnaire'] ?></font><br><br>
					<font face="Century Gothic">
					<div id = "aa"><input type="radio" name="a" id="opt1"  value = 'a'>&nbsp;<SPAN id="A"><?= $value['opt1'] ?></SPAN></div><br>
					<div id = "bb"><input type="radio" name="a" id="opt2"  value = 'b'>&nbsp;<span id="B"><?= $value['opt2'] ?></span></div><br>
					<div id = "cc"><input type="radio" name="a" id="opt3" value = 'c'>&nbsp;<span id="C"><?= $value['opt3'] ?></span></div><br>
					<div id = "dd"><input type="radio" name="a" id="opt4" value = 'd'>&nbsp;<span id="D"><?= $value['opt4'] ?></span></div><br>
					</font>
					<input type="submit" class="btn btn-primary" style="margin-left:200px;margin-top:20px;width:100px;height:35px;font-size:15px;" id="next" value="submit">
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script src="jquery.1.10.2.js"></script>
<script type="text/javascript" src="js/question.js"></script>
<?php endforeach?>
