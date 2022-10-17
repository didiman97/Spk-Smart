<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?menu">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Alternatif</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-7">
        <div class="text-dark">
            <form action="?menu=dtalternatif&aksi=add" method="POST">
                <div class="form-group row">
                    <label for="tglpermohonan" class="col-sm-4 col-form-label">Tanggal Permohonan</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tglpermohonan" name="tglpermohonan">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jk" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
			<select class="form-control" id="jk" placeholder="Jenis Kelamin" name="jk">
				<option>Pria</option>
				<option>Wanita</option>
			</select>
                       
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgllahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" name="tgllahir">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tprmh" class="col-sm-4 col-form-label">Tipe Rumah</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tprmh" placeholder="Tipe Rumah" name="tprumah">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nlkredit" class="col-sm-4 col-form-label">Nilai Kredit</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nlkredit" placeholder="Nilai Kredit" name="nlkredit">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" name="simpana" class="btn btn-primary btn-lg float-right">Simpan</button>
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
                        <th>Kode Alternatif</th>
                        <th>Tanggal Permohonan</th>
                        <th>Nama Alternatif</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Tipe Rumah</th>
                        <th>Nilai Kredit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $alternatif = $conn->query("SELECT * FROM data_alternatif");
                        $no = 1;
                        while ($data = $alternatif->fetch_array()){
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['Kd_Alternatif']; ?></td>
                        <td><?= date('d F Y', strtotime ($data['Tgl_Permohonan'])); ?></td>
                        <td><?= $data['Nama_Alternatif']; ?></td>
                        <td><?= $data['JK']; ?></td>
                        <td><?= $data['Alamat']; ?></td>
                        <td><?= date('d F Y', strtotime ($data['Tgl_Lahir'])); ?></td>
                        <td><?= $data['Tipe_Rumah']; ?></td>
                        <td><?= $data['Nilai_Kredit']; ?></td>
                        <td>
                            <a href="?menu=dtalternatif&aksi=change&id=<?= $data['No']; ?>" class="text-success"><span style="color:green" class="fas fa-edit"></span>Ubah</a>
                            <span class="h5"></span><br>
                            <a href="?menu=dtalternatif&aksi=del&id=<?= $data['Kd_Alternatif']; ?>" class="text-danger"><span style="color:red"class="fas fa-trash"></span>Hapus</a>
                        </td>
                    </tr>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>