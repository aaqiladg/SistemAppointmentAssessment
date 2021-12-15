
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Dosen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Show Dosen</h2>
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
        <td>{{$dosen->nama}}</td>
      </tr>
      <tr>
        <td>NIDN</td>
        <td>{{$dosen->nidn}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{$dosen->alamat}}</td>
      </tr>
      <tr>
        <td>Kontak</td>
        <td>{{$dosen->kontak}}</td>
      </tr>
    </tbody>
  </table>
  </div>
  <a href='/dosen' >
  <button type="button" class="btn btn-default">Back</button> </a>
</div>

</body>
</html>
