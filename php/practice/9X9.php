<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <?php
        for ($k = 1; $k <= 9; $k++) :
        ?>
            <tr>
                <?php
                for ($i = 1; $i <= 9; $i++) :
                ?>
                    <td><?= sprintf("%s * %s = %s", $i, $k, $i*$k) ?></td>
                <?php
                endfor
                ?>
            </tr>
        <?php
        endfor
        ?>
    </table>
</body>
</html>