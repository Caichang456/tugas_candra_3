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
								<h1>Semua Status</h1> <a href="/tambah-status" class="btn btn-success">Tambah Status</a>
							</div>
							<div class="card-body">
								<table class="table">
									<tbody>
										@foreach($statuses as $status)
											<tr>
												<td>{{$status->nama_status}}</td>
												<td>{{$status->isi_status}}</td>
												<td>{{$status->created_at}}</td>
												<td>
													<!--<a href="/tugas/{{$status->id}}" class="btn btn-info">Lihat Komentar</a> -->
													<a href="/form-komentar/{{$status->id}}" class="btn btn-success">Tambah Komentar</a>
												</td>
											</tr>
											<tr>
												<td colspan="5">
													<tr>
														<td><strong>Semua Komentar untuk #{{$status->nama_status}}</strong></td>
													</tr>
													@foreach($status->komentar as $komentar)
														<tr>
															<td>{{$komentar->nama_komentar}}</td>
															<td>{{$komentar->isi_komentar}}</td>
															<td>{{$komentar->created_at}}</td>
														</tr>
													@endforeach
													<tr>
														<td><strong>Akhir Komentar untuk #{{$status->nama_status}}</strong></td>
													</tr>
												</td>
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