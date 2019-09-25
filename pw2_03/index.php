<?php
include_once 'db_func/asuransi_func.php';
include_once 'db_func/pasien_func.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script>
    <title>Jonny 1772051</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
    <script src="js/insurance.js"></script>
    <script src="js/patient.js"></script>

    //Jonny
</head>
<body marginwidth=7.5%>
<nav>
    <h1>
        <a href="?menu=pt">Patient</a>
          |
        <a href="?menu=in">Insurance </a>
    </h1>
</nav>
<main>
    <?php
    $targetmenu = filter_input(INPUT_GET, 'menu');
    switch ($targetmenu) {
        case 'pt':
            include_once 'view/pasien.php';
            break;
        case 'in':
            include_once 'view/asuransi.php';
            break;
        case 'iu';
            include_once 'view/asuransi_update.php';
            break;
        case 'pu';
            include_once 'view/pasien_update.php';
            break;
        default:
            include_once 'index.php';
            break;
    }
    ?>
</main>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</html>
