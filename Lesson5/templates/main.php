<html lang="ru" >
<head>
    <title><?=$title?></title>
    <meta charset="utf-8">
</head>
<body>
    <?include $content;?>
    <form action="index.php" method="post">
        <input type="hidden" name="unAuth" value="true">
        <button type="submit">Выйти</button>
    </form>
</body>
</html>