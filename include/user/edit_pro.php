<?php

    include 'include/config.php';

    $id = $_POST['id'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user != "" && $pass != "") {

        $sql = mysqli_query($db_konek, "UPDATE user SET username='$user',
                                                        password_user='$pass' WHERE id_user='$id'");

        echo "
            <script type='text/javascript'>
                alert('Berhasil meng-edit data');
                window.location.href = '?page=user/tampil_data.php';
            </script>
        ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('Isi form dengan benar');
            window.location.href = '?page=user/edit.php&id=$id';
        </script>
        ";
    }

?>