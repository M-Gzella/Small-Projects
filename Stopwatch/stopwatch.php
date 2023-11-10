<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4f548c60ed.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist/css/stopwatch.min.css">
</head>
<body>

<div class="wrapper">
    <p class="info">
        <i class="fas fa-question"></i>
    </p>
    <p class="more-colors">
        <i class="fa-solid fa-palette"></i>
    </p>
    <h1>Stoper</h1>
    <p class="stopwatch">0:00</p>
    <p class="time">0:00</p>
    <div class="buttons">
        <button class="start"><i class="fas fa-play"></i></button>
        <button class="pause"><i class="fas fa-pause"></i></button>
        <button class="stop"><i class="fas fa-stop"></i></button>
        <button class="reset"><i class="fas fa-times"></i></button>
        <button class="history">archiwum</button>
    </div>
    <ul class="time-list">
    </ul>
    <div class="pallete">
        <p class="first-color"></p>
        <p class="second-color"></p>
        <p class="third-color"></p>
    </div>
</div>

<div class="modal-shadow">
    <div class="modal">
        <h3>Intrukcja:</h3>
        <p><i class="fas fa-play"></i> - start</p>
        <p><i class="fas fa-pause"></i> - pauza</p>
        <p><i class="fas fa-stop"></i> - stop</p>
        <p><i class="fas fa-times"></i> - skasuj wszystko</p>
        <p><strong>archiwum</strong> - zobacz poprzednie pomiary</p>
        <button class="close">Zamknij</button>
    </div>
</div>

<script src="dist/js/stopwatch.min.js"></script>
</body>
</html>