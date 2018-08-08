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
				    <small id="eNoHp" class="form-text text-muted" style="color: red;display: none">Mohon isi No. Telp / No. HP</small>
				  </div>

				  <div class="form-group">
				    <label for="email">E-Mail : </label>
				    <input type="text" class="form-control" id="email" name="email">
				    <small id="eEmail" class="form-text text-muted" style="color: red;display: none">Mohon isi E-Mail</small>
				  </div>
				  <div class="form-group">
				    <label for="idSkema">Skema Sertifikasi : </label>
				    <select id="idSkema" name="idSkema" id="idSkema" class="form-control">
				    <?php foreach ($skema as $skk): ?>
				    	<option value="<?php echo $skk->idSkema ?>"><?php echo $skk->skemaSertifikasi ?></option>
				    <?php endforeach ?>
					
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="tempatUjikom">Tempat Uji Kompetensi : </label>
				    <input type="text" class="form-control" id="tempatUjikom" name="tempatUjikom">
				    <small id="eTptUjikom" class="form-text text-muted" style="color: red;display: none">Mohon isi Tempat Uji Kompetensi</small>
				  </div>
				  <div class="form-group">
				    <label for="rekomendasi">Rekomendasi : </label>
				    <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" >
				    <small id="eRekomendasi" class="form-text text-muted" style="color: red;display: none">Mohon isi Rekomendasi</small>
				  </div>

				  <div class="form-group">
				    <label for="tglTerbitSertifikat">Tanggal Terbit Sertifikat : </label>
				    <input type="date" class="form-control" id="tglTerbitSertifikat" name="tglTerbitSertifikat" >
				    <small id="eTglSertifikat" class="form-text text-muted" style="color: red;display: none">Mohon isi Tanggal Terbit Sertifikat</small>
				  </div>

				  <div class="form-group">
				    <label for="tglLahir">Tanggal Lahir : </label>
				    <input type="date" class="form-control" id="tglLahir" name="tglLahir" placeholder="Mohon Isi Tanggal Lahir">
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
    	eNik.style.display='none';
    	eNama.style.display='none';
 	}
  $(".btn_submit").click(function(e){
  	e.preventDefault();
  	kosong();
  	//Submit Data Ke Controller
  	var nik = $('#nik').val();
  	var nama = $('#nama').val();
  	var noHp = $('#noHp').val();
  	var email = $('#email').val();
  	var idSkema = $('#idSkema').val();
  	var tempatUjikom = $('#tempatUjikom').val();
  	var rekomendasi = $('#rekomendasi').val();
  	var tglTerbitSertifikat = $('#tglTerbitSertifikat').val();
  	var tglLahir = $('#tglLahir').val();
  	var organisasi = $('#organisasi').val();

    if (!nik)
    {
    	eNik.style.display='block';
    }
    if (!nama)
    {
    	eNama.style.display='block';
    }
    if (!!nik && !!nama)
    {
  	e.preventDefault();

    	$.ajax({
	       url:'<?php echo site_url('peserta/insert') ?>',
	       type: 'POST',
	       data: $("#form1").serialize(),
	       success: function(result){
	          alert(result);
	          window.location = "<?php echo site_url('peserta') ?>";
	       },
	       error: function(){
	           alert("Gagal")
	       }
	   });
    }
 });
});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$( "#signupForm" ).validate( {
				rules: {
					nik: "required",
					nama: "required",
					noHp: {
						required: true,
						minlength: 8
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					agree: "required"
				},
				messages: {
					firstname: "Please enter your firstname",
					lastname: "Please enter your lastname",
					username: {
						required: "Please enter a username",
						minlength: "Your username must consist of at least 2 characters"
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
					},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
					agree: "Please accept our policy"
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
	});
</script>