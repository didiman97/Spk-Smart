<?php
    if (isset($_GET['id'])) {
        $Id = $_GET['id'];
        $sql = $conn->query("SELECT * FROM data_alternatif WHERE No = '$Id'");

        $data = $sql->fetch_array();
        $Kd_alternatif = $data['Kd_Alternatif'];
        $tglpermohonan = $data['Tgl_Permohonan'];
        $nama = $data['Nama_Alternatif'];
        $JK = $data['JK'];
        $alamat = $data['Alamat'];
        $tgllahir = $data['Tgl_Lahir'];
        $Tprumah = $data['Tipe_Rumah'];
        $Nlkredit = $data['Nilai_Kredit'];
    }


?>
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?menu">Home</a></li>
        <li class="breadcrumb-item"><a href="?menu=dtalternatif">Data Alternatif</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ubah Data Alternatif</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-7">
        <div class="text-dark">
            <form action="?menu=dtalternatif&aksi=updateprocess" method="POST">
            <input type="hidden" class="form-control" value="<?php echo $Id;?>" required autocomplete="off" name="id">
            <input type="hidden" class="form-control" value="<?php echo $Kd_alternatif;?>" required autocomplete="off" name="kdalternatif">
                <div class="form-group row">
                    <label for="tglpermohonan" class="col-sm-4 col-form-label">Tanggal Permohonan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tglpermohonan" value="<?= $tglpermohonan; ?>" name="tglpermohonan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?= $nama; ?>" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="jk" placeholder="Jenis Kelamin" value="<?= $JK; ?>" name="jk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat" value="<?= $alamat; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgllahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir" value="<?= $tgllahir; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tprmh" class="col-sm-4 col-form-label">Tipe Rumah</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tprmh" placeholder="Tipe Rumah" name="tprumah" value="<?= $Tprumah; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nlkredit" class="col-sm-4 col-form-label">Nilai Kredit</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nlkredit" placeholder="Nilai Kredit" name="nlkredit" value="<?= $Nlkredit; ?>">
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