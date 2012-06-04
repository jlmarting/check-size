<?php 

	
if (!isset($_POST['screenwidth'])) {
		?>
		<form name='f' method='post' action='index.php'>
			<input type='hidden' name='screenwidth'>
			<input type='hidden' name='screenheight'>
		</form>

		<script language="JavaScript"> 
			formObj = document.forms["f"]
			formObj.elements["screenwidth"].value=screen.width
			formObj.elements["screenheight"].value=screen.height
			formObj = document.forms["f"].submit()
		</script>
		
		<noscript>
			<?php require ("real_index.php"); ?>
		</noscript>
	<?php
	
}

else {

	$swidth = $_POST['screenwidth'];
	$sheight = $_POST['screenheight'];

	if ($swidth<$sheight) {$auxwidth=$sheight;$sheight=$swidth;$swidth=$auxwidth;}
	
	if ($swidth>640) $_SESSION['display-size'] = "big";
	else $_SESSION['display-size']="small";
	
	$_SESSION['x-size']=$swidth;	
	$_SESSION['y-size']=$sheight;
	
	
	unset($_POST['screenwidth']);unset($_POST['screenheight']);
	require ("real_index.php");

}


?>
