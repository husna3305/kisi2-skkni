<div class="container">
	<div class="row">
		<div class="col-md-12" style="padding-top: 30px">
			<div class="jumbotron"> 
			<form id="signupForm" method="post" class="form-horizontal" action="">
					<div class="form-group">
						<label class="col-sm-4 control-label" for="nik">NIK</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nik" name="nik"  />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="nama">Nama Lengkap</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="nama" name="nama"  />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="noHp">No. HP</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="noHp" name="noHp" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="email">Email</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="email" name="email" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="idSkema">Skema Sertifikat</label>
						<div class="col-sm-5">
							<select id="idSkema" name="idSkema" id="idSkema" class="form-control">
						    <?php foreach ($skema as $skk): ?>
						    	<option value="<?php echo $skk->idSkema ?>"><?php echo $skk->skemaSertifikasi ?></option>
						    <?php endforeach ?>
							
						    </select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label" for="tempatUjikom">Tempat Ujian Komputer</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="tempatUjikom" name="tempatUjikom" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="rekomendasi">Rekomendasi</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="rekomendasi" name="rekomendasi" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="tglTerbitSertifikat">Tanggal Terbit Sertifikat</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="tglTerbitSertifikat" name="tglTerbitSertifikat" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="tglLahir">Tanggal Lahir</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="tglLahir" name="tglLahir" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label" for="organisasi">Organisasi</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="organisasi" name="organisasi" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-4">
							<button type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">SIMPAN DATA</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready( function () {
			$( "#signupForm" ).validate( {
				rules: {
					nik: "required",
					nama: "required",
					noHp: {
						required: true,
						minlength: 5
					},
					tempatUjikom: {
						required: true,
						minlength: 5
					},
					email: {
						required: true,
						email: true
					},
					tglTerbitSertifikat: "required",
					tglLahir : "required",
					organisasi : "required",
					rekomendasi : "required"
				},
				messages: {
					nik: "Mohon Masukkan NIK",
					nama: "Mohon Masukkan Nama",
					noHp: {
						required: "Mohon Untuk Mengisi Fielad",
						minlength: "Minimal 10 Karakter"
					},
					email: "Please enter a valid email address",
					tempatUjikom: "Mohon Isi Tempat Ujian Komputer",
					tglTerbitSertifikat: "Mohon isi Tanggal Terbit Sertifikat",
					tglLahir: "Mohon Isi Tanggal Lahir",
					organisasi: "Mohon Isi Organisasi",
					rekomendasi: "Mohon Isi Rekomendasi",

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
		} );
</script>