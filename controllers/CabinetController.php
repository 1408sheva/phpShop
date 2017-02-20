<?php


class CabinetController
{
    public function actionIndex()
    {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        require_once (ROOT . "/views/cabinet/index.php");

        return true;
    }

    public function actionEdit()
    { 
        // Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        // Получаем информацию о пользователе  из БД
        $user = User::getUserById($userId);


        $name = $user['name'];
        $password = $user['password'];


        $errors = false;

        if (!User::checkName($name)){
        $errors[] = 'Имя не должно быть короче 2-ох символов';
        }

        if (!User::checkPassword($password)){
            $errors[] = 'Пароль не должен быть меньше 6 символов';
        }

        if ($errors == false){
            $result = User::edit($userId, $name, $password);
        }

        require_once (ROOT . "/views/cabinet/edit.php");

        return true;
    }
}