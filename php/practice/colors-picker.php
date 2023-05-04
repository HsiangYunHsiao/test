<!DOCTYPE html>
<html lang="en">
<!--GitTest-->
<!--GitTest123-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Picker</title>
    <style>
        td {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($k = 0; $k < 16; $k++) :
        ?>
            <tr>
                <?php
                for ($i = 0; $i < 16; $i++) :
                    $c = sprintf("#%X%X%X%X00", $i, $i, $k, $k);

                ?>
                    <td style="background-color: <?= $c ?>;" data-c="<?= $c ?>"></td>
                <?php
                endfor
                ?>
            </tr>
        <?php
        endfor
        ?>
    </table>

    <div style="width: 150px; height: 50px; border: 1px solid gray;" id="myShow"></div>


    <script>
        const myShow = document.querySelector('#myShow');

        document.querySelector('table').addEventListener('click', event => {
            const t = event.target;
            console.log(t.tagName)
            if (t.tagName === 'TD') {
                const color = t.getAttribute('data-c')
                myShow.style.backgroundColor = color;
                myShow.innerHTML = color;
            }
        });
    </script>
</body>

</html>