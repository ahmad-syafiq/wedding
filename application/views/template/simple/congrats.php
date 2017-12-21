<div class="container" style="background-color: rgba(255, 255, 255, 0.7);margin-bottom: 10px;">
	<div class="row">
		<?php
		if (!empty($_GET['success']))
		{
			?>
			<div class="alert alert-success" style="margin: 10px;">
				<span class="glyphicon glyphicon-ok-sign" title="ok sign"></span>
				Ucapan Berhasil Dikirim. Terimakasih.
			</div>
			<?php
		}
		?>
		<div class="col-md-6">
			<div class="panel panel-default" style="margin-top: 10px">
				<div class="panel-heading">
					<h3 class="panel-title">Kirim Ucapan Selamat</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama</label>
								<input name="name" value="" class="form-control name" req="any" title="Nama" placeholder="Nama" type="text" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input name="email" value="" class="form-control email" req="email" title="Email" placeholder="Email" type="text" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-body congrats_data" style="min-height: 20px; height: auto;">
									<span class="placeholder" style="color: #999">Silahkan pilih ucapan yang tersedia dibawah...</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-body" style="height: 170px; overflow: auto;">
									<?php
									foreach ($r_data as $data)
									{
										?>
											<span class="btn btn-primary btn-md congrats_btn" data-id="<?php echo $data->id ?>" style="margin-bottom:4px;white-space: normal;text-align: left;cursor: pointer;"><?php echo $data->title ?></span>
										<?php
									}
									?>
								</div>
							</div>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-success btn-block congrats_send">Send</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div style="background-color: rgba(255, 255, 255, 0.7); margin-top: 10px">
				<img style="width: 100%; padding: 10px;" src="/templates/simple/images/IMG_3224.JPG" class="img-responsive" alt="Image">
			</div>
		</div>
	</div>


	<div style="margin-top: 20px">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Ucapan Selamat Yang Telah Dikiriman.</h3>
			</div>
			<div class="panel-body" style="overflow: auto; max-height: 500px; height: auto;">
				<?php
				if (!empty($r_list))
				{
					?>
					<table class="table table-striped table-bordered table-responsive">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Ucapan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($r_list as $data)
							{
								?>
								<tr>
									<td><?php echo $data['data']['name'] ?></td>
									<td><?php echo $data['data']['email'] ?></td>
									<td><?php echo implode('. ', $data['congrats']) ?></td>
								</tr>
								<?php	
							}
							?>
						</tbody>
					</table>
					<?php
				}else{
					echo 'Daftar Ucapan Selamat Masih Kosong.';
				}
				?>
			</div>
		</div> 
	</div>
</div>
