<?php
    // 回應給用戶端之後才會設定
    setcookie('myCookie', 'This is Cookie HAHA!!', time()+10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
<?php
    // 要求來的時候, 給的 cookie
    echo $_COOKIE['myCookie'];

    ?>
</body>
</html>