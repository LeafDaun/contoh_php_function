<?php
if(file_exists('tes.txt')){
    $file = fopen('tes.txt', 'r') or die('File tidak ada');
    $size = filesize('tes.txt')<1 ? 1 : filesize('tes.txt'); 
    $data = fread($file, $size);
}

if(isset($_POST['teks'])){
    $teks_area = $_POST['teks'];
    file_put_contents('tes.txt', $teks_area);
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <textarea name="xx" id="" cols="30" rows="10"><?php echo $data ?? '' ; ?></textarea>
    <form action="" method="post">
        <label for="">Teks Editor</label><br>
        <textarea name="teks" id="" cols="30" rows="3"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>