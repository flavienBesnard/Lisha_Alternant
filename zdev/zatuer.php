<?php
	$chaine = 'abcd0dfjsldkjhfjl';
	$my_chaine = str_replace("x","XX",$chaine);

	$chaine = 'a&nbsp; a';
	error_log(htmlentities($chaine));
	die();
?>
<html xmlns="http://www.w3.org/1999/html">
	<head>
		<title>Test</title>
		<script type="text/javascript">
			function remove_top()
			{
				document.getElementById("tab_source").deleteRow(0);
			}
			function add_bottom()
			{
				var count = document.getElementById("tab_source").rows.length;

				var table = document.getElementById("tab_source");

				var row = table.insertRow(count);
				row.id = "tr_"+count;	// Add id attribute

				var cellLeft = row.insertCell(0);
				var cellRight = row.insertCell(1);

				cellLeft.innerHTML = "new "+count;
				cellRight.innerHTML = "new tr_"+count;
			}
		</script>
	</head>
	<body>
	<div style="cursor: pointer; background-color: #bb3333; display: block; float: left; width:100px; top:0;" onclick="remove_top();">Supprime</div>
	<div style="cursor: pointer; background-color: #18a314; display: block; float: left; width:100px; top:0;" onclick="add_bottom();">Ajoute</div>
	<br/>
	<?php
		echo '<table id="tab_source" border=1>'.chr(10);
		$i=5;
		while($i > 0)
		{
			$tr = "tr_".$i;
			echo '<tr id="'.$tr.'">'.chr(10);

			echo '<td>'.$i.'</td>'.chr(10);
			echo '<td>'.$tr.'</td>'.chr(10);

			echo '</tr>'.chr(10);

			$i = $i - 1;
		}
		echo '</table>';
	?>
	</body>
</html>