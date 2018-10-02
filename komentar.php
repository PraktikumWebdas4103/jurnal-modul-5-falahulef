<form action="#" method="POST">
<table>
<tr>
<td>Komentar</td> <td>:</td> <td><textarea style="height: 120; width: 150;" name="komen"></textarea></td>
</tr>
<tr>
<td></td><td></td><td><input type="submit" name="submit" value="Hitung Panjang"></td>
</tr>
</table>
</form>

<?php  
if (isset($_POST['submit'])) {
	$kata = $_POST['komen'];
	$hitung = str_word_count($kata);
	echo "Jumlah Kata String di atas adalah $hitung";
}
?>
