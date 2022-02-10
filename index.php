<?php
// Penulisan variabel diluar tag html
$nama = "Eka";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dalam HTML</title>
</head>

<body>
    <h4>
        Selamat Datang <?php echo $nama; ?>
    </h4>
</body>

</html>