<pre><?php

    date_default_timezone_set('Asia/Taipei');
    echo date("Y-m-d H:i:s"). '<br>';
    echo date("Y-m-d H:i:s",time()). '<br>';
    echo date("Y-m-d H:i:s",time() + 30*24*60*60). '<br>';
    echo date("Y-m-d H:i:s",time() - 30*24*60*60). '<br>';
    echo date("Y-m-d H:i:s",strtotime('2023/08/16')). '<br>';
    echo date("Y-m-d H:i:s",strtotime('08/16/2023')). '<br>'; //會自己判斷各國格式
?></pre>

<script>
    setTimeout(()=>{
        location.reload();
    }, 1000)-0
</script>