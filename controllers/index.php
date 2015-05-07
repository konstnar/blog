<?php

require_once __DIR__ . '/../inc/view.php';
require_once __DIR__ . '/../models/article.php';


class Index {

    public function actionHome() {
        $articles = ModelArticle::getAllArticles();
        View::render('Main Page', $articles, 'allarticles.html.php');
    }

}