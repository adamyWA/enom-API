<?php
$viewObj = new LoadView;
$command="main";

if(isset($_GET["action"])) {
	$command = htmlentities(trim($_GET["action"]));
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="http://<?php echo $_SERVER["SERVER_NAME"] . "/";?>css/bootstrap.min.css" rel="stylesheet">
<link href="css/default.css" rel="stylesheet">
</head>
<body>
<?php
$header = $viewObj->load("header");
echo "<div class='container'>";
$content = $viewObj->load($command);
echo "</div>";
$footer = $viewObj->load("footer");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://<?php echo $_SERVER["SERVER_NAME"] . "/";?>js/bootstrap.min.js"></script>
</body>
</html>