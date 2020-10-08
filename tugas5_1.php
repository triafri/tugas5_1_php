<?php
	$true = true;
	$false = false;

echo "<br>";
echo "<table width = 500 border =1 >
		<tr align=center>
			<td>Input 1</td>
			<td>Input 2</td>
			<td>AND</td>
			<td>OR</td>
		</tr>
		<tr align=center>
			<td>False</td>
			<td>False</td>
			<td>".printf($false && $false)."</td>
			<td>".printf($false || $false)."</td>
		</tr>
		<tr align=center>
			<td>False</td>
			<td>True</td>
			<td>".printf($false && $true)."</td>
			<td>".printf($false || $true)."</td>
		</tr>
		<tr align=center>
			<td>True</td>
			<td>False</td>
			<td>".printf($true && $false)."</td>
			<td>".printf($true || $false)."</td>
		</tr>
		<tr align=center>
			<td>True</td>
			<td>True</td>
			<td>".printf($true && $true)."</td>
			<td>".printf($true || $true)."</td>
		</tr>
		</table>";
?>