<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_SESSION['username'])){
    $cate = $category->getCateByID($_GET['cate_id']);
    if (!isset($_POST['update'])) :?>
        <form action="?action=update-cate" method='post'>
            <label>Nhap thong tin sua</label>
            <label>The Loai</label>
            <input type="hidden" name="cate_id" value="<?php echo $cate->getCateID()?>" />
            <input type='text' name='cate_name' value="<?php echo $cate->getCateName()?>" />
            <input type="submit" name="update" value="Cap nhat">
        </form>
<?php endif;}else   header('location:?action=showLoginForm')?>
</body>

</html>