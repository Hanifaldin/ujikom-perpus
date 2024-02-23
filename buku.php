<div class="card">
    <div class="card-header">
        <h1 class="mt-3 text-center">List Buku</h1>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=pendataan_buku" class="btn btn-primary mb-3"><i class="fa-plus"></i>Tambah Data</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['judul']; ?></td>
                        <td><?php echo $data['penulis']; ?></td>
                        <td><?php echo $data['penerbit']; ?></td>
                        <td><?php echo $data['tahun_terbit']; ?></td>
                        <td><?php echo $data['deskripsi']; ?></td>
                        <td>
                            <a href="?page=edit_buku&&id=<?php echo $data['id_buku']; ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=hapus_buku&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>    
            