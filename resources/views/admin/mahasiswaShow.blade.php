
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Mahasiswa</h2>
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
        <td>Nama</td>
        <td>{{$mahasiswa->nama}}</td>
      </tr>
      <tr>
        <td>NIM</td>
        <td>{{$mahasiswa->nim}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{$mahasiswa->alamat}}</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>{{$mahasiswa->tanggal_lahir}}</td>
      </tr>
      <tr>
        <td>Tahun Masuk</td>
        <td>{{$mahasiswa->tahun_masuk}}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <a href='/mahasiswa' >
  <button type="button" class="btn btn-default">Back</button> </a>
</div>

</body>
</html>
