<?php
    include 'base.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title> PK GTS - Nama Kalian</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='Shortcut Icon' href='/favicon.ico' type='image/x-icon' />
    <meta name='description' content='' />
    <meta name='keywords' content='' />
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css' />
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"> </script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"> </script>
</head>

<body>
    <div class="container">

        <?php
        $halaman = isset($_GET['page']) ? $_GET['page'] : null;
        switch($halaman){
            case 'aksi-tambah':
                include 'pages/aksi-tambah.php';
                break;
            case 'aksi-edit':
                include 'pages/aksi-edit.php';
                break;
            case 'aksi-hapus':
                include 'pages/aksi-hapus.php';
                break;
            case 'tambah':
                include 'pages/tambah.php';
                break;
            case 'edit':
                include 'pages/edit.php';
                break;

            default:
                include 'pages/view.php';
                break;
        }
        ?>

        <footer class="container-fluid footer text-center py-3 mt-auto">
            <hr />
          &copy; <?= date("Y") ?>| UKM PK - Nama Kalian
        </footer>

        <script src="assets/plugins/sweetalert/sweetalert.min.js"> </script>
    </div>
</body>

</html>