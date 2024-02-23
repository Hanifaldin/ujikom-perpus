<div class="card">
    <div class="card-header">
        <h1 class="mt-3 text-center">List Kategori</h1>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <a href="?page=pendataan_kategori" class="btn btn-primary mb-3"><i class="fa-plus"></i>Tambah Data</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td>
                            <a href="?page=edit_kategori&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">Edit</a>
                            <a onclick="return confirm('Apakah anda yakin menghapus data ini?');" href="?page=hapus_kategori&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-danger">Hapus</a>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>    
            