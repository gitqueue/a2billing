<?php
include ("../lib/agent.defines.php");
include_once ("../lib/agent.module.access.php");
include ("../lib/agent.smarty.php");


if (!$ACXACCESS) {
	Header ("HTTP/1.0 401 Unauthorized");
	Header ("Location: PP_error.php?c=accessdenied");	   
	die();	   
}

$smarty->display('main.tpl');
?>
<br/><br/>

<center>
<table align="center" width="90%" bgcolor="white" cellpadding="25" cellspacing="25" style="border: solid 1px">
	<tr>
		<td width="340">
			<img src="<?php echo Images_Path;?>/a2b-logo-450.png">
			<br><br>
			<center><b><i>A2Billing is licensed under <a href="http://www.fsf.org/licensing/licenses/agpl-3.0.html" target="_blank">AGPL 3</a>.</i></b></center>
			<br><br>
		</td>
		<td align="left">
		For information and documentation on A2Billing, <br> please visit <a href="http://www.a2billing.org" target="_blank">http://www.a2billing.org</a><br><br>
		
		For Commercial Installations, Hosted Systems, Customisation and Commercial support, please visit <a href="http://www.star2billing.com" target="_blank">http://www.star2billing.com</a><br><br>
		<br/><br/><br/><br/>
		
		</td>
	</tr>
</table>
</center>

<br>

	

<?php

$smarty->display('footer.tpl');

