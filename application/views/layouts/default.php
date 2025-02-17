<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $title; ?></title>
        <link href="/public/styles/bootstrap.css" rel="stylesheet">
        <link href="/public/styles/main.css" rel="stylesheet">
        <link href="/public/styles/font-awesome.css" rel="stylesheet">
        <script src="/public/scripts/jquery.js"></script>
        <script src="/public/scripts/form.js"></script>
        <script src="/public/scripts/popper.js"></script>
        <script src="/public/scripts/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">О музее</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/events">Мероприятия</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objects">Все экспонаты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objects1">РиТ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objects2">АиВТ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objects3">АиК</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/objects4">ЭиИБ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Обратная связь</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/laboratory">Лаборатория</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/visit">Записаться</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/login">Админка</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php echo $content; ?>
        <hr>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="https://vk.com/id368810061" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">&copy; 2022, Таганрогский политехнический музей</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>