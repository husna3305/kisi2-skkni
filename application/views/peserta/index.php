<div class="container-fluid" style="padding-top: 30px">
	<div class="row">
		<div class="col-md-6" style="padding-bottom: 10px;" 	>
			<!--<a href="<?php echo site_url('peserta/insert') ?>" class="btn btn-primary" >Cari</a><br> -->
		</div>
		<div class="col-md-6" style="padding-bottom: 10px;" align="right">
			<a href="<?php echo site_url('peserta/insert') ?>" class="btn btn-primary" >Tambah</a><br>
		</div>
		<div class="col-md-12">
			<table class="table table-bordered table-hover table-condensed table-striped font-12">
				<thead>
					<th>No.</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>No. HP</th>
					<th>E-Mail</th>
					<th>Skema Sertifikasi</th>
					<th>Tempat Ujian Kompetensi</th>
					<th>Rekomendasi</th>
					<th>Tanggal Terbit Sertifikat</th>
					<th>Tanggal Lahir</th>
					<th>Organisasi</th>
					<th>Aksi</th>
				</thead>
				<?php $no=1; foreach ($dataPeserta as $d_pes): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $d_pes->nik ?></td>
						<td><?php echo $d_pes->nama ?></td>
						<td><?php echo $d_pes->noHp ?></td>
						<td><?php echo $d_pes->email ?></td>
						<td><?php echo $d_pes->skemaSertifikasi ?></td>
						<td><?php echo $d_pes->tempatUjikom ?></td>
						<td><?php echo $d_pes->rekomendasi ?></td>
						<td><?php echo $d_pes->tglTerbitSertifikat ?></td>
						<td><?php echo $d_pes->tglLahir ?></td>
						<td><?php echo $d_pes->organisasi ?></td>
						<td>
							<a href="<?php echo site_url('peserta/update/'.$d_pes->nik) ?>" class="btn btn-warning btn-sm">Update</a> | <a href="<?php echo site_url('peserta/delete/'.$d_pes->nik) ?>" class="btn btn-danger btn-sm">Hapus</a>
						</td>
					</tr>
				<?php $no++; endforeach ?>
			</table>
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
						//responsiveVoice.speak("Hello World","Indonesian Men");
						responsiveVoice.speak(data[0],"Indonesian Male");
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