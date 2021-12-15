<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Jadwal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Jadwal</h2>
  <br>     
  <div class="table-responsive">
  <table class="table" style="width: 50%;">
    <thead>
      <tr>
        <th style="width: 200px;"></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mahasiswa</td>
        <td>{{$jadwal->mahasiswa_id}}</td>
      </tr>
      <tr>
        <td>Dosen</td>
        <td>{{$jadwal->dosen_id}}</td>
      </tr>
      <tr>
        <td>Judul</td>
        <td>{{$jadwal->judul}}</td>
      </tr>
      <tr>
        <td>Deskripsi</td>
        <td>{{$jadwal->deskripsi}}</td>
      </tr>
      <tr>
        <td>Awal</td>
        <td>{{$jadwal->awal}}</td>
      </tr>
      <tr>
        <td>Akhir</td>
        <td>{{$jadwal->akhir}}</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

</body>
</html>
