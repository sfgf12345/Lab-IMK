<?php

    include 'include/config.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($user != "" && $pass != "") {

        $sql = mysqli_query($db_konek, "INSERT INTO user(username, password_user) VALUES('$user', '$pass')");

        echo "
            <script type='text/javascript'>
                alert('Tambah data berhasil');
                window.location.href = '?page=user/tampil_data.php';
            </script>
         ";
    } else {
        echo "
            <script type='text/javascript'>
                alert('Isi form dengan benar');
                window.location.href = '?page=user/form.php';
            </script>
        ";
    }

?>