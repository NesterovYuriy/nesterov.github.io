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

        <div class="hero container">
            <div class="hero--info">
                <h2>Блог</h2>
                <h1>Регистрация и добавление постов</h1>
                <p>А также возможность просмотра личного кабинета.</p>
            </div>
            <img src="зп.jpg" alt="">
        </div>

        <div class="container big-text">
            <p>Простой и понятный сайт для блога и других записей.</p>
        </div>

        
            <img src="/img/banner.png" alt="">
        </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Краткая информация обо мне.</h3>
            <p>Мне 21 год. Я живу в городе Казань. </p>
            
            <div class="images">
                <img src="/img/Казань.jpg" alt="">
            </div>

            <div class="images">
                <img src="/img/Чаша.jpeg" alt="">
            </div>

        <div class="container email">
            <h3>Это лишь малая часть всех достопримечательностей нашего города.</h3>
            <div class="block">
                <div>
        
    </div>
    <?php require_once "blocks/footer.php"; ?>
    
    <script>
        function checkEmail() {
            let email = document.querySelector('#emailField').value;
            if (!email.includes('@')) alert('Нет символа @');
            else if (!email.includes('.')) alert('Нет символа .');
            else alert('Все отлично!');
        }
    </script>
</body>

</html>