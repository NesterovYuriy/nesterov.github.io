<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="hero-about container">
            <div class="info">
                <h1>На этой странице представлена информация о данном сайте-блоге.</h1>
                <p>Блог это не более чем просто страница, на котороой любой зарегистрированный пользователь может оставить свои мысли..</p>
            </div>
            <img src="/img/about-banner.png" alt="">
        </div>

        <div class="container work">
            <h2>Почему именно этот сайт?</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Удобство</span>
                    <p>Любой может написать здесь то, что ему захочется.</p>
                </div>
                <div class="block">
                    <span class="badge brown">Доступность</span>
                    <p>Он абсолютно бесплатный.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>
    
</body>

</html>