<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_POST['login'])) :?>
    <form action='?action=login' method='post'>
        <label>Nhap thong tin dang nhap</label>
        <label>Username</label>
        <input type='text' name='uname' value='admin'/>
        
        <label>Password</label>
        <input type='password' name='pwd' value='admin'/>
        <input type="submit" name="login" value="Login">
    </form>
<?php endif;?>
</body>
</html>