<?php
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
        $sql = $conn->query("SELECT * FROM data_kriteria WHERE No = '$Id'");

        $data = $sql->fetch_array();
        $Kd_alternatif = $data['Kd_Alternatif'];
        $Nama_alternatif = $data['Nama_Alternatif'];
        $K1 = $data['K1'];
        $K2 = $data['K2'];
        $K3 = $data['K3'];
        $K4 = $data['K4'];
        $K5 = $data['K5'];
    }


?>
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?menu">Home</a></li>
        <li class="breadcrumb-item"><a href="?menu=dtkriteria">Data Kriteria</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ubah Data Kriteria</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-7">
        <div class="text-dark">
            <form action="?menu=dtkriteria&aksi=updateprocess" method="POST">
                <input type="hidden" class="form-control" value="<?php echo $Id;?>" required autocomplete="off" name="id">
                <div class="form-group row">
                    <label for="kdalternatif" class="col-sm-4 col-form-label">Kode Alternatif</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kdalternatif" name="kdalternatif" value="<?= $Kd_alternatif ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nmalt" class="col-sm-4 col-form-label">Nama Alternatif</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nmalt" name="nmalt" value="<?= $Nama_alternatif ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K1" class="col-sm-4 col-form-label">K1</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K1" value="<?= $K1 ?>" name="k1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K2" class="col-sm-4 col-form-label">K2</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K2" value="<?= $K2 ?>" name="k2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K3" class="col-sm-4 col-form-label">K3</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K3" value="<?= $K3 ?>" name="k3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K4" class="col-sm-4 col-form-label">K4</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K4" value="<?= $K4 ?>" name="k4">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K5" class="col-sm-4 col-form-label">K5</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K5" value="<?= $K5 ?>" name="k5">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" name="update" class="btn btn-success float-right btn-lg"><span class="fas fa-edit"></span> Update</button>
                        <button type="submit" name="batal" class="btn btn-danger btn-lg float-right mr-4"><span class="fas fa-times-circle"></span> Batal</button>
                    </div>
                </div>
            </form>
        </div>
        <br/>
    </div>


    <div class="col-md-5">
        <div class="text-center text-white">
            <img src="assets/img/logo.png" alt="J. City" class="img-thumbnail" width="450px" height="150px">
        </div>
        <br/>
    </div>
</div>
<br>