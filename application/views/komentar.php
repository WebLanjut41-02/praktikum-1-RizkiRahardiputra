<!DOCTYPE html>
<html>
<head><!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <title>Komentar</title>
</head>
<body>
<center>
    <form action="<?php echo base_url()?>testCI/proses " method = "post">
        <tr>
            <div class="vertical-menu">
                <h3>
                <a href="<?php echo base_url()?>testCI/tampilform/form" class="active">Home</a>
                <a href="<?php echo base_url()?>testCI/tampilfoto/foto">Foto</a>
                <a href="<?php echo base_url()?>testCI/tampilportofolio/portofolio">Portofolio</a>
                <a href="<?php echo base_url()?>testCI/tampilkomentar/komentar">Komentar</a>
                </h3>
            </div>
        </tr>
        <tr>
            <h2>Komentar</h2>
        </tr>
        <tr>
            <td><input type="text" name="nama" style="width: 400px; height: 100px;" placeholder="Masukkan Komentar"></td><br><br>
            <td><input class="btn btn-primary" type="submit" name="submit" value="Send"></td>
        </tr>
    </form>
</center>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>