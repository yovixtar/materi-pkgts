<h2 class="text-center mt-4">Tambah Data Siswa</h2>
<hr />
<div class="container mt-4">

    <form action="?page=aksi-tambah" method="POST" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-select" aria-label="Default select example" name="kelas">
                <option selected>Pilih Kelas</option>
                <option value="10 TKJ 1">10 TKJ 1</option>
                <option value="11 TKJ 1">11 TKJ 1</option>
                <option value="12 TKJ 1">12 TKJ 1</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tanggal_lahir">
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="Laki - Laki">
                <label class="form-check-label" for="jenis_kelamin1">
                    Laki - Laki
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="Perempuan">
                <label class="form-check-label" for="jenis_kelamin2">
                    Perempuan
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto Profile (1 : 1)</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/png,image/jpeg,image/jpg">
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="ModalTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalTambahLabel">Simpan Data ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Batal</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
    <br>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambah">Simpan</button>
    <a href="?"> <button class="btn btn-success">Kembali</button></a>
</div>