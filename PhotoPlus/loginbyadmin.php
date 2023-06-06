<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="/assets/admin.css">

    <title> ФОТО СТУДИЯ + </title>
</head>

<body>

    <main class="main">
        <section class="login section container">
            <div class="login__content">
                <h2 class="login__title">вход <br> в администрационную панель</h2>

                <form action="/database/conectadmin.php" method="post">
                    <div class="form__content grid">
                        <input type="text" class="form__input" placeholder="Логин" name="login">
                        <input type="text" class="form__input" placeholder="Пароль" name="password">

                        <button class="form__buttno button">Войти</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>