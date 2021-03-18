<?
    include "model/gallery.php";
    include "model/auth.php";

    if(isset($_FILES["photo"])){
        add_photo($_FILES["photo"]);
    }

    if(userIsAuth() || $_POST['login'] == 'true'){
        userAuth();
    }else{
        $_GET['view'] = 'auth';
    }
    if ($_POST['unAuth'] == 'true'){
        userExit();
    }


  //получаем массив наших фотографий
  $photos = gallery();
  $title = "Галерея фотографий";

  switch ($_GET["view"]){
      case 'auth':
          $content = "templates/content_auth.php";
          break;
      case 'list':
          $content = "templates/content_list.php";
          break;
      case 'lk':
          $content = "templates/content_lk.php";
          break;
      default:
          $content = "templates/content_table.php";
          break;
  }

  include "templates/main.php";