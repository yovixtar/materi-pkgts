<div class="container mt-4">
    <div class="row">
        <h2 class="text-center">Data Siswa SMK N 1 SRAGI</h2>
        <hr />
        <div class="col-12 mt-3">
            <a href="?page=tambah"><button class="btn btn-primary f-l mb-2">Tambah Siswa</button></a>
            <table class="table table-hover table-light align-middle">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $nomor =1;
                    $statement = mysqli_query($koneksi, "SELECT * FROM siswa") or die(mysqli_error($koneksi));
                    while($data = mysqli_fetch_array($statement)){
                ?>
                    <tr>
                        <td><?= $nomor; ?></td>
                        <td class="d-none" id="IdSiswa<?= $data['id'] ?>"><?= $data['id'] ?></td>
                        <td id="NamaSiswa<?= $data['id'] ?>"><?= $data['nama'] ?></td>
                        <td><?= $data['kelas'] ?></td>
                        <td><?= $data['tanggal_lahir'] ?></td>
                        <td><?= $data['jenis_kelamin'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td>
                            <img src="assets/img/<?= $data['foto'] ?>" style="width:80px" class="rounded-circle" /></td>
                        <td>
                            <a href="!!"><button type="button" class="btn btn-outline-success">Update</button>
                        </a>
                            <button type="button" class="btn btn-danger" onclick="hapussiswa(0)">Hapus</button>
                        </td>
                    </tr>
                <?php
                        $nomor++;
                    } 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function hapussiswa(idx) {
        var nama = $("#NamaSiswa" + idx).text();
        swal({
                title: "Hapus Siswa",
                text: "Yakin hapus siswa " + nama + " ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var id_siswa = $("#IdSiswa" + idx).text();
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.open("GET", "!!" + id_siswa, true);
                    xhttp.send();
                    swal("Pesan Dihapus !", {
                            icon: "success",
                            button: false,
                            timer: 1100,
                        })
                        .then((value) => {
                            location.reload();
                        });

                } else {

                }
            });
    }
</script>