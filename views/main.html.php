<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="stylesheet" href="/../css/reset.css">
    <link rel="stylesheet" href="/../css/style.css">
</head>
<body>
    <!-- begin 'container' -->
    <div class="container">

        <header class="main_header">
            <a class="main_header__title" href="/"><h1>Простой блог на php</h1></a>
            <p class="main_header__descr">Блог начинающего веб-разработчика</p>
            <nav>
                <ul>
                    <li><a href="?controller=ControllerArticle&action=createArticle">Добавить статью</a></li>
                </ul>
            </nav>
        </header>

        <div class="content">

        <?php require_once __DIR__ . '/' . $path; ?>
            
        </div>
        <footer class="main_footer">
            <p class="main_footer__copyright">
                &copy; 2015
            </p>
        </footer>
    </div>
    <!-- end of 'container' -->
</body>
</html>