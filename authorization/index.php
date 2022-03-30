<?php
if ($_SESSION['user']) {
    header('Location: index.php?page=profile');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="all">
<div class="signin">
<!-- Форма авторизации -->

<div class="form_a">

    <form action="authorization/handler_form/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button class="butreg" type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="index.php?page=register">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
        ?> 
        
    </form>
    </div>
</div>
</body>
</html>