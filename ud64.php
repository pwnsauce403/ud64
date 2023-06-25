<html>
<head>
<meta charset="UTF-8">
<style>*{font-family:Arial;}a{text-decoration:none;}</style>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
<body>
<center>
<?php
if($_POST){
$obfuscated_data = $_POST['obfuscated'];
$cleaned_data = gzinflate(convert_uudecode(base64_decode(gzinflate(base64_decode(str_rot13(explode('"', explode('$uD64_c0m("',$obfuscated_data)[1])[0]))))));
$cleaned_data = explode('header("Location: http://ud64.com/"); die(); } ', $cleaned_data)[1];
?>
<textarea cols="60" rows="20" readonly>&lt;?php
<?=$cleaned_data?></textarea>
<?php
}
?>
<form method="post">
<textarea name="obfuscated" placeholder="paste your obfuscate code here..." cols="60" rows="20" class="form-control"></textarea><br><br>
<button type="submit">FIRE!</button>
</form>
</center>
</body></html>