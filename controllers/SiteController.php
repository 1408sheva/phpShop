<?php

include_once ROOT . '/models/Category.php';
include_once ROOT . '/models/Product.php';

class SiteController
{

    public function actionIndex(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(20);

        require_once (ROOT. '/views/site/index.php');

        return true;
    }

    public function actionContact() {

        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])) {

            $userEmail = "1408sheva@gmail.com";
            $userText = 'Содержимае письма';

            $errors = false;

            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors [] = 'Неправильный емейл';
            }
            if ($errors == false) {
                $adminEmail = '1408fanta@gmai.com';
                $message = "Текст: {$userText}.  От {$userEmail}";
                $subject = 'Тема письма';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
    require_once (ROOT . '/views/site/contact.php');

        return true;
    }
}