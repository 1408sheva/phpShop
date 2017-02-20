<?php require_once ('/views/layout/header.php');?>

<selection>
    <div class="container">
        <div class="row">
            <h1>Кабинет пользователя</h1>

            <h3>Привет, пользователь <?=$user['name']?>!</h3>

            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/cabinet/history">Список покупок</a></li>
            </ul>

        </div>
    </div>
</selection>

<?php require_once ('/views/layout/footer.php');?>
