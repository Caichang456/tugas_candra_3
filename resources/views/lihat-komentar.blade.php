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
								Lihat Semua Komentar
							</div>
							<div class="card-body">
								<table class="table table-striped">
									<tbody>
										<h1>Status Detail</h1>
										<p><strong>Status ID:</strong> {{$statuses->id}}</p>
										<p><strong>Nama Status:</strong> {{$statuses->nama_status}}</p>
										<p><strong>Isi Status:</strong> {{$statuses->isi_status}}</p>
										<p><strong>Created At:</strong> {{$statuses->created_at}}</p>
										<p><strong>Updated At:</strong> {{$statuses->updated_at}}</p>
									</tbody>
									<thead>
										<tr>
											<th>ID Komentar</th>
											<th>Nama Status</th>
											<th>Nama Komentar</th>
											<th>Isi Komentar</th>
										</tr>
									</thead>
									<tbody>
										@foreach($komentars as $komentar)
											<tr>
												<td>{{$komentar->id}}</td>
												<td>{{$komentar->status->nama_status }}</td>
												<td>{{$komentar->nama_komentar}}</td>
												<td>{{$komentar->isi_komentar}}</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>