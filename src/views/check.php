<?php
$return ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$check = new Check;
	$return = $check->returnCheck();
}

?>
<div>
<div class="container">
<?php 

if(!empty($return)) {

	echo "<div class='col-lg-3'></div>";
	echo "<div class='col-lg-6 alert alert-dismissible alert-info'>";
	echo $return;
	echo "</div>";
	echo "<div class='col-lg-3'></div>";

}
?>
</div>
<form method="post" action="check" input="text" class="form-horizontal">
<fieldset>
<div class="form-group well well-lg">
<div class="col-lg-4"></div>
 <div class="col-lg-4">
<input type="text" name="sld" placeholder="SLD" class="form-control"></input><br>
 <div class="input-group">
    <span class="input-group-addon">.</span>
    <input type="text" name="tld" placeholder ="TLD" class="form-control">

</div>
<br>
<input type="submit" class="btn btn-primary btn-lg">
<div class="col-lg-4"></div>
</div>
</fieldset>
</form>


</div>