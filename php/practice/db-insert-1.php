<?php
#沒有防範攻擊機制，下個例子會提到

include'./connect-pd.php';

$sql = "INSERT INTO `address_book`(`name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES ('阿明123','min@gmail.com','9999999999','1987-01-01','家裡',now())";

$stmt = $pdo->query($sql);

echo $stmt->rowCount();