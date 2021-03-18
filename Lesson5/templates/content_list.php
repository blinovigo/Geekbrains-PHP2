<a href="index.php">Таблица</a> | Список | <a href="index.php?view=lk">Личный кабинет</a>
<br><br>
<?
  foreach($photos as $img){?>
      <a href="photo.php?id=<?=$img[id]?>">
            <img src=<?=$img["id"].".".$img["type"]?> height="200">
      </a>
  <?}
?>