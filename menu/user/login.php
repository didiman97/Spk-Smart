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
        <center>
            <br>
            <div class="text-center">
                <h2 class="text-primary">Sistem  Pendukung  Keputusan  Untuk  Menentukan Kelayakan  Pengajuan  Kredit  Rumah <br> Bersubsidi  Dengan (Simple  Multi  Attribut  Rating  Tecnique) <br> DiPerumahan Jewel  Residence</h2>
            </div>

            <br>
            <hr class="style-hr-2">
            <div class="col-md-4">
                <form autocomplete="off" action="menu/user/process.php" method="POST">
                    <div class="form-group">
                        <label for="username" class="h5">Username</label>
                        <input type="text" class="form-control text-xl-center bg-primary text-light" id="username" name="username" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" class="h5">Password</label>
                        <input type="password" class="form-control text-xl-center bg-primary text-light" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-warning float-right text-uppercase btn-lg text-danger" name="login"><span class="fas fa-sign-in-alt text-danger"></span>&emsp;Login</button>
                </form>
            </div>
        </center>
        <br>
        <br>
        <br>

        <footer class="footer-copyright text-center py-3 footer bg-primary"><i>© 2021 Copyright :</i>
            <a href="#" class="text-light"><b>Jewel Residence</b></a>
        </footer>
    </div>
</body>
<script src="assets/js/all.min.js"></script>

</html>