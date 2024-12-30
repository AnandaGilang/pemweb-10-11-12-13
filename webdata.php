<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Tabel BIodata Mahasiswa</h2>
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="select_all"></th>
        <th>ID</th>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type='checkbox' name='checked_id[]' value=''></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>