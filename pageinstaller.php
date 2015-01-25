<?php
if (!defined('BLARG')) die(); //Nothing...

$title = __("Single page installer"); //Title
CheckPermission('admin.viewadminpanel');
MakeCrumbs(array(actionLink("installer") => __('Single Page Installer')));

$iplugin = $_POST["iplugin"]
?>

<!-- HTML Table --->
<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Single Page Installer
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
				Please click on Install to Install single pages<br>
			<form action="#installer" method="post" enctype="multipart/form-data"> 
			<input type="file" name="iplugin">
			<input type="submit" value="Install"> 
</form>
			</td>
		</tr>
</tbody></table>
<!-- HTML Table --->

<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Plugin Result:
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
			<?php echo "Run script: <b>$_FILES</b>";
			if($iplugin < 0)
			{
				echo "<br>No result...<br>";
			}
			echo "<br>";
			if($_FILES)
			{
					echo "Installed (when it was php)";
					echo "<br>Look into /pages/ to see your action";
			}
			?>
			</td>
</tbody></table>

<?php 
move_uploaded_file($_FILES['iplugin']['tmp_name'], "pages/".$_FILES['iplugin']['name']);
?> 

<table class="outline margin">
		<tbody><tr class="header1">
			<th>
				Installed Single Plugins:
			</th>
		</tr>
		<tr class="cell0">
			<td style="text-align:center;padding:5px;">
		Nothing...
			</td>
</tbody></table>

<?php
if($iplugin)
{
	$link = new actionLink("$iplugin", "", "", "", "");
	$link->newtab = true;
	$headerlinks->add($link); 
}
?>