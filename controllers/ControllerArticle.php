<?php

require_once __DIR__ . '/../inc/view.php';
require_once __DIR__ . '/../models/article.php';


class ControllerArticle {


    public function createArticle() {
        
        if (!empty($_POST)) {
            $title = trim(htmlspecialchars($_POST['article_title']));
            $text = trim(htmlspecialchars($_POST['article_content']));

            ModelArticle::createArticle($title, $text);
            header('Location: / ');
            exit();
        } else {
            View::render('Создать статью', $articles='', ModelArticle::createArticle());
            exit();
        }
    }
}