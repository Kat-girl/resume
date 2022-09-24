<!DOCTYPE html>
<html>
<head>
  <?php
  error_reporting(E_ERROR);
    require_once "functions/functions.php";
    $news = getNews (1, $_GET["id"]);
    $news2 = getNews (5,"");
    $title = $news["title"];
    require_once "blocks/head.php";

  ?>
</head>
<body>
  <?php require_once "blocks/header.php"?>
  <wrapper>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-8">
          <div id="leftCol">
            <?php
              echo '<div id="bigArticle"><img src="img/article/'.$news["id"].'.jpg" alt="Статья '.$news["id"].'">
                <h2>'.$news["title"].'</h2>
                <p>'.$news["full_text"].'</p>
                </div>';
                for ($i=0; $i<count($news2); $i++) {
                  echo '<div class="collapsed"><img src="img/article/'.$news2[$i]["id"].'.jpg" alt="Статья '.$news2[$i]["id"].'">
                    <h2>'.$news2[$i]["title"].'</h2>
                    <p>'.$news2[$i]["intro_text"].'</p>
                    <a href="article.php?id='.$news2[$i]["id"].'">
                      <div>Далее</div>
                    </a>
                    </div>';
                }
             ?>
             <input type="button" id="more" name="more" value="Читать еще">
             <script type="text/javascript">
               $(document).ready(function () {
                 $(".collapsed").addClass("hidden");
                 $("#more").click (function () {
                   if ($(".collapsed").hasClass ("hidden")) {
                     $(".collapsed").removeClass ("hidden");
                     $(".collapsed").addClass ("shown");
                     $("#more").val("Скрыть");
                   }
                   else if ($(".collapsed").hasClass ("shown")) {
                     $(".collapsed").removeClass ("shown");
                     $(".collapsed").addClass ("hidden");
                     $("#more").val("Читать еще");
                   }
                 });
               });
             </script>
         </div>
       </div>
       <div class="col-sm-6 col-md-3 col-lg-4">
         <?php require_once "blocks/rightCol.php"?>
       </div>
     </div>
   </div>
  </wrapper>
  <?php require_once "blocks/footer.php"?>
</body>
</html>
