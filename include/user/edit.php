<div class="col-md-6">
    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit User</h6>
        </div>
        <div class="card-body">
            <?php

                    include 'include/config.php';

                    $no = 1;
                    $tangkap_data = $_GET['id'];
                    $sql = mysqli_query($db_konek, "SELECT * FROM user WHERE id_user='$tangkap_data'");

                    $ambil_data = mysqli_fetch_array($sql);
                        // print_r($ambil_data);
                        // exit();
                    $id_user = $ambil_data['id_user'];
                    $username = $ambil_data['username'];
                    $password_user = $ambil_data['password_user'];

                ?>

            <form action="?page=user/edit_pro.php" method="POST">
                <input type="hidden" name="id" value="<?= $id_user ?>">

                <input type="text" name="user" value="<?= $username ?>" placeholder="Enter your Username"><br>
                <input type="password" name="pass" value="<?= $password_user ?>" placeholder="Enter your Password"><br>
                <input type="submit" value="Simpan Data"><br>
            </form>
        </div>
    </div>
</div>