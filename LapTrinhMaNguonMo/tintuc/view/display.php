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
        foreach ($categories as $key => $value) { ?>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten loai</th>
                    <th>Hanh dong</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $value['cate_id']?></td>
                    <td><?php echo $value['cate_name']?></td>
                    <td>
                        <a href="?action=edit&id=<?php echo $value['cate_id']?>">Sua</a>
                        <a href="?action=delete&id=<?php echo $value['cate_id']?>">Xoa</a>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php
        }
    ?>
</body>
</html>