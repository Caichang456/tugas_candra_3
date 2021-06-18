<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tugas Facebook dengan Laravel 8 tanpa Docker</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	</head>
	<body>
		<section style="padding-top:60px;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								Tambah Komentar
							</div>
							<div class="card-body">
								<form method="POST" action="{{route('komentar.bertambah')}}">
									@csrf
									<input type="hidden" name="txt_id_status" value="{{$statuses->id}}">
									<div class="form-group">
										<label for="nama_komentar">Nama Komentar</label>
										<input type="text" name="txt_nama_komentar" class="form-control" placeholder="Nama Komentar" />
									</div>
									<div class="form-group">
										<label for="isi_komentar">Isi Komentar</label>
										<textarea name="txt_isi_komentar" class="form-control" rows="3"></textarea>
									</div>
									<button type="submit" class="btn btn-success">Tambah Komentar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>