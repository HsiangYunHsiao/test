<?php
#防範 SQL注入攻擊，此為基本防護，只要外來資料都要不信任
include'./connect-pd.php';

$sql = "INSERT INTO `address_book`(`name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES (?,?,?,?,?,now())";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    "吳阿毛's bf",
    'maomao@gmail.com',
    '8787878787',
    '1999-03-03',
    '不知'
]);

echo $stmt->rowCount();