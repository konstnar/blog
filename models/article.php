<?php

require_once __DIR__ . '/../inc/db.php';




class ModelArticle {

    
    public function getAllArticles() {

        $pdo = db_connect();


        $sql = 'SELECT * FROM articles ORDER BY create_date DESC';
        $result = $pdo->query($sql);

        while ($article = $result->fetch(PDO::FETCH_ASSOC)) {
            $articles[] = $article;
        }

        return $articles;

    }


    public function getArticleById($id) {

        $pdo = db_connect();

        $sql = 'SELECT * FROM article WHERE id = :id';
        $s = $pdo->repare($sql);
        $s->bindValue(':id', (int)$id);
        $s->execute();

        return $s->fetch(PDO::FETCH_ASSOC);

    }


    public function createArticle($titleArticle='', $textArticle='') {

        if (empty($_POST['article_title']) && empty($_POST['article_content'])) {
            return 'article.form.html.php';
        }

        $pdo = db_connect();

        $sql = 'INSERT INTO articles SET
                title = :title,
                content = :content,
                create_date = NOW()';

        $s = $pdo->prepare($sql);
        $s->bindValue(':title', $titleArticle);
        $s->bindValue(':content', $textArticle);
        $s->execute();
    }
}