<!DOCTYPE html>
<html>
<head>
<title>UD64 Deobfuscator</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" />
<style>
body {
  font-size: 12px;
  font-family: ubuntu mono;
  background-color: #1e1e2e;
  color: white;margin:0;}
a {
  color: white;
  font-weight: bold;
  text-decoration: none;
}
a:hover, a:active {
  color: #868686;
  text-decoration: underline;
}
.button {
  background-color: #1e1e2e;
  color: white;
  padding: 20px;
  text-align: center;
  display: inline-block;
  cursor: pointer;
}
.peli {padding:5px;width:100px;margin-top:10px;border-radius:4px;}
</style>
</head>
<body>
<center>
<div style="font-size:16px; text-align:center; font-weight:bold;">
<pre><a href="ud64.php" style="text-decoration:none;">UD64 Deobfuscator</a></pre>
</div>
<?=@null;
if($_POST){
$obfus = $_POST['obfuscated'];
$deob = gzinflate(convert_uudecode(base64_decode(gzinflate(base64_decode(str_rot13(explode('"', explode('$uD64_c0m("',$obfus)[1])[0]))))));
$deob = explode('header("Location: http://ud64.com/"); die(); } ', $deob)[1];
?>
<textarea cols="60" rows="20" readonly>&lt;?php
<?=$deob?></textarea>
<?=@null;
}
?>
<style type="text/css">
input, textarea {
border-radius:6px;
}
</style>
<form method="post">
<textarea name="obfuscated" placeholder="paste your ud64 obfuscate code from http://ud64.com/ here..." cols="60" rows="20" class="form-control"></textarea><br><br>
<button type="submit" class="peli">FIRE!</button>
</form>
</center>
</body>
</html>
