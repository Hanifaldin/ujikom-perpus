<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registerasi</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <?php
                                                if(isset($_POST['register'])){
                                                    $nama = $_POST('nama');
                                                    $username = $_POST('usename');
                                                    $email = $_POST('email');
                                                    $no_telepon = $_POST('no_telepon');
                                                    $alamat = $_POST('alamat');
                                                    $password = $_POST('password');
                                                    $level = $_POST('level');

                                                    
                                                }
                                            ?>
                                            <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control py-3" type="nama" name="nama" placeholder="Masukan Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-3" type="username" name="username" placeholder="Masukan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-3" type="email" name="email" placeholder="Masukan Email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">No Telepon</label>
                                                <input class="form-control py-3" type="no_telepon" name="no_telepon" placeholder="Masukan No Telepon" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea class="form-control py-3" name="alamat" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-3" type="password" name="password" placeholder="Masukan Password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select class="form-control py-3" type="level" name="level">
                                                    <option value="admin">Admin</option>
                                                    <option value="peminjam">Peminjam</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="btn btn-danger" href="register.php">Register</a>
                                                <a class="btn btn-primary" href="index.php">Login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">&copy; Aretha</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
