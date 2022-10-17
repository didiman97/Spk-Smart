<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?menu">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Kriteria</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-7">
        <div class="text-dark">
            <form action="?menu=dtkriteria&aksi=add" method="POST">
                <div class="form-group row">
                    <label for="kdalternatif" class="col-sm-4 col-form-label">Kode Alternatif</label>
                    <div class="col-sm-8 text-dark">
                        <select name="kdalternatif" id="kdalternatif" class="form-control" onchange="changeValue(this.value)">>
                        <option value="">Pilih.....</option>
                        <?php 
                        $sql = $conn->query("SELECT * FROM data_alternatif");
                        $jsArray = "var namaal = new Array();\n";
                        while ($row = mysqli_fetch_array($sql)) { ?>
                            <option value="<?php echo $row["Kd_Alternatif"]?>"> <?php echo $row["Kd_Alternatif"]?> </option>
                            <?php $jsArray .= "namaal['" . $row['Kd_Alternatif'] . "'] = {nmalt:'" . addslashes($row['Nama_Alternatif'])."'};\n"; ?>
                        <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nmalt" class="col-sm-4 col-form-label">Nama Alternatif</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nmalt" name="nmalt" placeholder="Nama Alternatif" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K1" class="col-sm-4 col-form-label">K1</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K1" placeholder="Kriteria 1" name="k1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K2" class="col-sm-4 col-form-label">K2</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K2" placeholder="Kriteria 2" name="k2">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K3" class="col-sm-4 col-form-label">K3</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K3" placeholder="Kriteria 3" name="k3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K4" class="col-sm-4 col-form-label">K4</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K4" placeholder="Kriteria 4" name="k4">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="K5" class="col-sm-4 col-form-label">K5</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="K5" placeholder="Kriteria 5" name="k5">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" name="simpank" class="btn btn-primary float-right">Simpan</button>
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


    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered responsive" id="">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kriteria</th>
                        <th>Kode ALternatif</th>
                        <th>Nama Alternatif</th>
                        <th>K1</th>
                        <th>K2</th>
                        <th>K3</th>
                        <th>K4</th>
                        <th>K5</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $kriteria = $conn->query("SELECT * FROM data_kriteria");
                        $no = 1;
                        while ($data = $kriteria->fetch_array()){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['Kd_Kriteria']; ?></td>
                        <td><?= $data['Kd_Alternatif']; ?></td>
                        <td><?= $data['Nama_Alternatif']; ?></td>
                        <td><?= $data['K1']; ?></td>
                        <td><?= $data['K2']; ?></td>
                        <td><?= $data['K3']; ?></td>
                        <td><?= $data['K4']; ?></td>
                        <td><?= $data['K5']; ?></td>
                        <td>
                            <a href="?menu=dtkriteria&aksi=delresponderpenilaian&id=<?= $data['No']?>" class="text-success"><span style="color:green" class="fas fa-edit"></span>Ubah</a>
                            <span class="h5">|</span>
                            <a href="?menu=dtkriteria&aksi=del&id=<?= $data['Kd_Alternatif']?>" class="text-danger"><span style="color:red"class="fas fa-trash"></span>Hapus</a>
                        </td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">  
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('nmalt').value = namaal[id].nmalt;
};
</script>
<br>