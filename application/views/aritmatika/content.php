<div class="container">
	<dir class="row">
		<div class="col-md-12">
			<div class="well">
				<form method="POST">
				  <div class="form-group">
				    <label for="angka1">Masukkkan Angka Pertama : </label>
				    <input type="text" class="form-control" id="angka1" name="angka1" placeholder="Masukkan Angka Pertama">
				    <small id="NilaiPertamaError" class="form-text text-muted" style="color: red;display: none">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="angka2">Masukkkan Angka Kedua : </label>
				    <input type="number" class="form-control" id="angka2" name="angka2" placeholder="Masukkan Angka Pertama">
				    <small id="NilaiPertamaError" class="form-text text-muted" style="color: red;display: none">We'll never share your email with anyone else.</small>
				  </div>
				  <button type="submit" class="btn btn-primary" name="submit" value="+"><b>+</b></button>
				  <button type="submit" class="btn btn-primary" name="submit" value="-"><b>-</b></button>
				  <button type="submit" class="btn btn-primary" name="submit" value="*"><b>*</b></button>
				  <button type="submit" class="btn btn-primary" name="submit" value="/"><b>/</b></button>
				</form>
			</div>
		</div>
	</dir>
</div>


<?php 
//	include 'function/terbilang.php';

	function tambah($a, $b)
	{
		$h = $a + $b;
		return $h;
	}
	function kurang($a, $b)
	{
		$h = $a - $b;
		return $h;
	}
	function kali($a, $b)
	{
		$h = $a * $b;
		return $h;
	}
	function bagi($a, $b)
	{
		$h = $a / $b;
		return $h;
	}

	if (isset($_POST['submit']))
	{	
		$submit = $_POST['submit'];
		$angka1	= $_POST['angka1'];
		$angka2	= $_POST['angka2'];

		if ($submit=='+')
		{
			echo $tambah = tambah($angka1,$angka2);
			echo terbilang($tambah);
		}
		if ($submit=='-')
		{
			echo $kurang = kurang($angka1,$angka2);
			echo terbilang($kurang);
		}
		if ($submit=='*')
		{
			echo $kali = kali($angka1,$angka2);
			echo terbilang($kali);
		}
		if ($submit=='/')
		{
			echo $bagi =  bagi($angka1,$angka2);
			$bagi = $angka1/$angka2;
			echo ucwords(terbilang($bagi));
		}
	}
 ?>