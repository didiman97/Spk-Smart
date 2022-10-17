<?php 
    session_start();
    require "assets/conf/conn.php";

    if (!isset($_SESSION['username'])){
        include "menu/user/login.php";
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewel Residence</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand text-white" href="#">SPK SMART</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="index.php"> <span class="fas fa-home"></span>&nbsp; Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link text-white" href="?menu=dtalternatif"><span class="fas fa-database"></span>&nbsp;Data Alternatif</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="?menu=dtkriteria"><span class="fas fa-person-booth"></span>&nbsp;Data Kriteria</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="?menu=hasil"><span class="fas fa-calculator"></span>&nbsp;Hasil</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white float-right text-warning h5" href="?menu=user&aksi=logout"><span class="fas fa-user" style="color:darkred"></span> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-12 text-lg-center">
                <?php require "menu/navbar.php" ?>
            </div>
        </div>

        <footer class="footer-copyright text-center py-3 footer bg-primary"><i>© 2020 Copyright :</i>
            <a href="#" class="text-light"><b>Jewel Residence</b></a>
        </footer>
    </div>
</body>
<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/jquery-3.3.1.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/all.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</html>
<?php } ?>