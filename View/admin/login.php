<?php require 'layout/header.php';?>

<div class="login-screen">

    <!--login logo-->
    <div class="login-logo">
        <a href="#">
            <img src="<?= assetUrl('images/admin/logo.png')?>" alt="">
        </a>
    </div>

    <form action="#" method="post">
        <ul>
            <li>
                <label for="username">Kullanıcı Adı</label>
                <input type="text" id="userName" name="userName" value="user">
            </li>
            <li>
                <label for="password">Şifre</label>
                <input type="password" id="userPassword" name="userPassword" value="123456">
            </li>
            <li>
                <button type="submit" name="submit" value="Giriş Yap">Giriş Yap</button>
            </li>
        </ul>
    </form>

    <div class="login-links">
        <a href="#" class="lost-password">
            <?=$error?>
        </a>
    </div>

</div>

<?php require 'layout/footer.php';?>
