<?php


class View {

    public $title;
    public $path;
    public $data;
    public $articles;

    public function render($title='', $data='', $path='allarticles.html.php') {

        $title = $title;
        $path = $path;
        $articles = $data;


        include __DIR__ . '/../views/main.html.php';
        exit();

    }

}