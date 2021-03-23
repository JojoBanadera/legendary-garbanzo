<?php  
session_start(); 
$_SESSION['visit'] = $_SESSION['visit'] ?? 0;
$_SESSION['visit']++;
$count = $_SESSION['visit'] ?? 0;
if ($_SESSION['visit'] === 5) {
	$count = $_SESSION['visit'];
	echo 'Thank you for visiting'.'<br>';
}
elseif ($_SESSION['visit'] === 10) {
	header("Location:congratulations.php");
	session_unset();
	session_destroy();
}
?>
<h1>Hello</h1>
<p>You have visited this page <?php echo $count?> times</p>
<p><a href="?reset=true">Reset</a></p>
