<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron"> 
				<form method="POST" id="form1">
				  <div class="form-group">
				    <label for="nik">NIK : </label>
				    <input type="text" class="form-control" id="nik" name="nik">
				    <small id="eNik" class="form-text text-muted" style="color: red;display: none">Mohon isi NIK</small>
				  </div>
				  <div class="form-group">
				    <label for="nama">Nama Lengkap : </label>
				    <input type="text" class="form-control" id="nama" name="nama">
				    <small id="eNama" class="form-text text-muted" style="color: red;display: none">Mohon isi Nama Lengkap</small>
				  </div>

				  <div class="form-group">
				    <label for="noHp">No. Telp / No. HP : </label>
				    <input type="text" class="form-control" id="noHp" name="noHp">
				    <small id="eNik" class="form-text text-muted" style="color: red;display: none">Mohon isi No. Telp / No. HP</small>
				  </div>

				  <div class="form-group">
				    <label for="email">E-Mail : </label>
				    <input type="text" class="form-control" id="email" name="email">
				    <small id="eEmail" class="form-text text-muted" style="color: red;display: none">Mohon isi E-Mail</small>
				  </div>
				  <div class="form-group">
				    <label for="angka2">Skema Sertifikasi : </label>
				    <select id="aritmatika" name="aritmatika" class="form-control">
				    <?php foreach ($skema as $skk): ?>
				    	<option><?php echo $skk->skemaSertifikasi ?></option>
				    <?php endforeach ?>
					
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="idTempatUjikom">Tempat Uji Kompetensi : </label>
				    <input type="text" class="form-control" id="idTempatUjikom" name="idTempatUjikom">
				    <small id="eTptUjikom" class="form-text text-muted" style="color: red;display: none">Mohon isi Tempat Uji Kompetensi</small>
				  </div>
				  <div class="form-group">
				    <label for="rekomendasi">Rekomendasi : </label>
				    <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" >
				    <small id="eRekomendasi" class="form-text text-muted" style="color: red;display: none">Mohon isi Rekomendasi</small>
				  </div>

				  <div class="form-group">
				    <label for="tglTerbitSertifikat">Tanggal Terbit Sertifikat : </label>
				    <input type="text" class="form-control" id="tglTerbitSertifikat" name="tglTerbitSertifikat" >
				    <small id="eTglSertifikat" class="form-text text-muted" style="color: red;display: none">Mohon isi Tanggal Terbit Sertifikat</small>
				  </div>

				  <div class="form-group">
				    <label for="tglLahir">Tanggal Lahir : </label>
				    <input type="text" class="form-control" id="tglLahir" name="tglLahir" placeholder="Mohon Isi Tanggal Lahir">
				    <small id="eTglLahir" class="form-text text-muted" style="color: red;display: none">Mohon isi Tanggal Lahir</small>
				  </div>

				   <div class="form-group">
				    <label for="organisasi">Organisasi : </label>
				    <input type="text" class="form-control" id="organisasi" name="organisasi" >
				    <small id="eOrganisasi" class="form-text text-muted" style="color: red;display: none">Mohon isi Organisasi</small>
				  </div>
				  <button type="submit" class="btn btn-primary btn_submit" name="submit" value="+" ><b>SIMPAN</b></button>
				</form>
			</div>
		</div>
	</div>
</div>



<script>
 $(function(){
 	function kosong()
 	{
    	eAngka1.style.display='none';
    	eAngka2.style.display='none';
 	}
  $(".btn_submit").click(function(e){
  	kosong();
  	var angka1=$('#angka1').val();
  	var angka2=$('#angka2').val();
  	//Submit Data Ke Controller
    if (!angka1)
    {
    	eAngka1.style.display='block';
    }
    if (!angka2)
    {
    	eAngka2.style.display='block';
    }
    if (!!angka1 && !!angka2)
    {
    	$.ajax({
	       url:'<?php echo site_url('aritmatika/hitung') ?>',
	       type: 'POST',
	       data: $("#form1").serialize(),
	       success: function(result){
	           data=result.split("||");
						$("#terbilang").text(data[0]);
						$("#hasil").text(data[1]);
	       },
	       error: function(){
	           alert("Gagal")
	       }
	   });
    }
   e.preventDefault();
 });
});
</script>