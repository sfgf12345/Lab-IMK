<div class="col-md-12">
    <a href="?page=user/form.php" class="btn btn-primary">Tambah Data User</a>
    <br><br>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>

                    <?php

                        include 'include/config.php';

                        $no = 1;
                        $sql = mysqli_query($db_konek, "SELECT * FROM user");

                        while ($ambil_data = mysqli_fetch_array($sql)) {    //(while untuk pengulangan) fetch_array = mengubah data objek ke dalam data array sehingga data yg diambil dari table database bisa ditampilkan 1 per 1
                            // print_r($ambil_data);
                            // exit();
                        $id_user = $ambil_data['id_user'];
                        $username = $ambil_data['username'];
                        $password_user = $ambil_data['password_user'];

                    ?>

                    <tr>
                    
                        <td><?= $no++ ?></td>
                        <td><?= $username ?></td>
                        <td><?= $password_user ?></td>
                        <td>
                            <a href="?page=user/edit.php&id=<?= $id_user ?>" class="btn btn-warning">Edit </a>
                            <a onclick = "return confirm('Anda yakin ingin menghapus data ini?')" href="?page=user/hapus.php&id=<?= $id_user ?>" class="btn btn-danger"> Delete</a>
                        </td>
                    </tr>

                        <?php 
                            }      // penutup while, kenapa pake php baru biar tabel diatas gak susah bikinnya
                        ?>

                </table>
            </div>
        </div>
    </div>
</div>

     <!-- pada baris ke 40-43 tanda tanya nya  untuk mencetak data di dlm browser, sama dengan echo -->