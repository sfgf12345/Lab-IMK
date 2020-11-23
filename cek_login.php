<?php
    session_start();
    include 'include/config.php';

    // VALIDASI PADA METHOD FORM
    if($_POST) {

        $user = $_POST['user'];
        $pass = $_POST['pass'];

        // VALIDASI PADA INPUT
        if ($user != "" and $pass != "") {

            $sql = mysqli_query($db_konek, "SELECT * FROM user WHERE username='$user' AND password_user='$pass' ");

            $cek_baris = mysqli_num_rows($sql);

            // KONDISI UNTUK VALIDASI BARIS
            if ($cek_baris == TRUE) {

                $ambil_data = mysqli_fetch_array($sql);
                $status_user = $ambil_data['status_user'];
                $username = $ambil_data['username'];

                // CARA MENYIMPAN VARIABLE KEDALAM SESION
                $_SESSION['status_user'] = $status_user;
                $_SESSION['username'] = $username;

                //KONDISI UNTUK VALIDASI STATUS PADA USER
                if ($status_user == "admin") {
                    header('Location: index.php');  //Cara 1 pakai location:

                } else {
                    echo "
                        <script type='text/javascript'>
                            alert('Status anda bukan admin');
                            window.location.href = 'login.php';
                        </script>
                    ";
                }

            } else {
                echo "  
                <script type='text/javascript'>
                    alert('LOGIN GAGAL!');
                    window.location.href = 'login.php';
                </script>
                ";
            }
        } else {
            echo "  
            <script type='text/javascript'>
                alert('LOGIN GAGAL');
                window.location.href = 'login.php';
            </script>
            ";
        }
    } 

?>