<?php
$db_host = 'localhost';
$db_name = 'proj57';
$db_user = 'root';
$db_pass = 'root';
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8"; // data source name
$pdo_options = [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
// ATTR_ERRMOD：錯誤模式，ERRMODE_EXCEPTION：丟出錯誤，ERRMODE_SILENT：錯誤不會顯示，多用在正式環境
// PDO在遇到error之後，會拋出異常
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // PDO 默認使用關聯數組的形式返回查詢結果。
// ATTR_DEFAULT_FETCH_MODE：使用 fetch()抓資料時，FETCH_ASSOC：關聯字陣列，
];



// 以下不一定要做
try {
$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options); // 輸入可能會發生異常的程式碼
} catch(PDOException $ex) {
echo 'Connection failed: '. $ex->getMessage(); // 發生異常處理的方式
}