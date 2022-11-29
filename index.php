<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background:url(Fon.png);">
<div style="width:100%;height:80px;background-color: black;border-radius: 25px;position: relative;">
            <div style="color:gray;
                        font-size: 55px;
                        font-style: italic;
                        text-align: center;">
            SUETA CARS<img src="logo.png">
            </div>
            </div>
    <div class="container" mt-4>
        <?php
            if($_COOKIE['user']==''):
        ?>
        <div class="row" style="background-color: black;color: white;border-radius: 15px;translate: 0px 120px;">
            <div class="col">
                <h1>Регистрація</h1>
        <form action="/php/check.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
            <button class="btn btn-success" type="submit">Зареєструватися</button>
        </form>
        </div>
            <div class="col">
                <h1>Авторизація</h1>
        <form action="/php/auth.php" method="post">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
            <button class="btn btn-success" type="submit">Авторизуватися</button>
        </form>
        </div>
        <?php else: ?>
            <body style="background:url(Fon.png);background-repeat: no-repeat;background-attachment: fixed;height:100%;width:100%;">
    
            <div style="font-size:30px;font-weight:bold;text-align:center;color:white;translate: 375px 65px;background-color:black;width:600px;border-radius: 25px;position: absolute;"><p>Вітаю <?=$_COOKIE['user']?>.Щоб вийти натисніть <a href="/exit.php" style="text-decoration:none;color:yellow;">тут</a>.</p><br>
            Щоб перейти на головну сторінку натисніть <a href="/second.php" style="text-decoration:none;color:yellow;">тут</a>.</div>
            </body>
        <?php endif; ?>

        </div>
    </div>
    
</body>

</html>