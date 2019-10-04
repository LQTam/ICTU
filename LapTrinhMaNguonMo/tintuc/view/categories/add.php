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
        if (!isset($_POST['store'])) :?>
            <form action="?action=store-cate" method='post'>
                <label>==Them moi==</label>
                <label>The Loai</label>
                <input type='text' name='cate_name'  />
                <input type="submit" name="store" value="Them moi">
            </form>
    <?php endif;}else   header('location:?action=showLoginForm')?>
</body>

</html>