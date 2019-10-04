<?php session_start()   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php if(isset($_SESSION['username'])) {?>
        <h1>Welcome <?php echo $_SESSION['username']?> <a href='?action=logout' 
        onclick="document.getElementById('logout-form').submit()"
        >Logout</a></h1>

        <form action="?action=logout" id='logout-form' style="display:none" method='post'>
            <input type='submit' />
        </form>
    <?php }else header('location:?action=showLoginForm');
     ?>
    <table>
        <a href='?action=add-cate'>Them the loai</a>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ten loai</th>
                <th>Hanh dong</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $key => $cate) : ?>

                <tr>
                    <td><?php echo $cate->getCateID() ?></td>
                    <td><?php echo $cate->getCateName() ?></td>
                    <td>
                        <a href="?action=edit-cate&cate_id=<?php echo $cate->getCateID() ?>">Sua</a>
                        <a href="?action=delete-cate&cate_id=<?php echo $cate->getCateID() ?>" 
                        onclick="if(confirm('Ban co chan chan muon xoa \'<?php echo $cate->getCateName() ?>\' khong?')) return true;else return false"
                        >Xoa</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>