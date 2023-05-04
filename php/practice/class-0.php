<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
class Emperor {
    public $name = 'XiDaDa';
    public $age = 64;
    protected $nickname = 'Mr.C';
    private $secret = 'smallDick';

    function __construct($oldname='XiJinPing', $oldage=0){
        $this->name = $oldname;
        $this->age = $oldage;
    }

    function getSecret(){
        return $this->secret;
    }
}

class Underground extends Emperor {
    function __construct($underground_nickname='Winnie'){
        // parent::__construct();  // 呼叫父類別的建構子
        $this->nickname = $underground_nickname;
    }

    //在 Underground 或 Emperor 皆可
    function getNickname(){
        return $this->nickname;
    }
    
}

$e = new Emperor('Xibaozi',99);
$n = new Underground;
echo "$e->name <br>";
echo "$e->age <br>";
echo $n->getNickname() ."<br>";
echo $e->getSecret() ."<br>";
?>
</body>

</html>