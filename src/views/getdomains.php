<?php
$return ="";
$getDomains = new GetDomains;
$return = $getDomains->getDomains();
?>

	<div class="col-lg-4"></div>
		<div class="col-lg-2">
			<form action="getdomains" method="post">
				<input type="hidden" name="start" value="<?php echo $return[1];?>"></input>
				<button class="btn btn-default<?php if( $return[1] == 0) { echo " disabled"; }?>">Previous</button>
			</form>
		</div>
		<div class="col-lg-2">
			<form action="getdomains" method="post">
				<input type="hidden" name="start" value="<?php echo $return[2]; ?>"></input>
				<button class="btn btn-default">Next</button>
			</form>
		</div>
		<div class="col-lg-4"></div>
		
		
<table class="table table-striped table-hover ">
<?php 

if(!empty($return)) {
	echo "<thead><th>Domain Names</th><th>Expiration Date</th><th>Auto Renew</th><th>ID Protect</th></thead>";
	foreach($return[0] as $k=>$v) {
		echo "<tr>";
		echo "<form action='domaininfo' method='post'>";
		echo "<input type='hidden' name='sld' value=" . $v["sld"] . "></input>";
		echo "<input type='hidden' name='tld' value=" . $v["tld"] . "></input>";
		echo "<td class='active'><button type='submit' class='btn btn-default'>" . $v["domainname"] . "</td></button>";
		echo "<td class='info'>" . $v["expires"] . "</td>";

		if ($v["auto"] == "Yes" || $v["auto"] === "1") {
			echo "<td class = 'success'>Enabled</td>";
		}
		if ($v["auto"] == "No" || $v["auto"] === "0") {
			echo "<td class = 'danger'>Disabled</td>";
		}
		if ($v["wpps"] == "n/a") {
			echo "<td class='active'>Not Supported</td>";
		}
		if ($v["wpps"] == "disabled") {
			echo "<td class='danger'>No</td>";
		}
		if ($v["wpps"] == "enabled") {
			echo "<td class='success'>Yes</td>";
		}

		echo "</tr>";
		echo "</form>";
		echo "</thead>";

	}
}
?>
</table>

	<div class="col-lg-4"></div>
		<div class="col-lg-2">
			<form action="getdomains" method="post">
				<input type="hidden" name="start" value="<?php echo $return[1];?>"></input>
				<button class="btn btn-default<?php if( $return[1] == 0) { echo " disabled"; }?>">Previous</button>
			</form>
		</div>
		<div class="col-lg-2">
			<form action="getdomains" method="post">
				<input type="hidden" name="start" value="<?php echo $return[2]; ?>"></input>
				<button class="btn btn-default">Next</button>
			</form>
		</div>
		<div class="col-lg-4"></div>
	
</div>
