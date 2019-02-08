<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $this->session->userdata('username'); ?></td>
      <td><?php echo $this->session->userdata('password'); ?></td>
      <td><a href="index.html"><button type="button" class="btn btn-primary">Edit</button></a></td>
    </tr>
  </tbody>
</table>
       

</body>
</html>