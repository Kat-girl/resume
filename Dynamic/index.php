<!DOCTYPE html>
<html>
<head>
  <?php
  error_reporting(E_ERROR);
    require_once "functions/functions.php";
    $title = "Новости обо всем";
    require_once "blocks/head.php";
    $news = getNews("5","");
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
              for ($i=0; $i<count($news); $i++) {
                if ($i==0)
                  echo "<div id=\"bigArticle\">";
                else if ($i <= 2)
                  echo "<div class=\"article\">";
                else
                  echo "<div class=\"collapsed\">";
                echo '<img src="img/article/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["intro_text"].'</p>
                <a href="article.php?id='.$news[$i]["id"].'">
                  <div>Далее</div>
                </a>
                </div>';
                if ($i == 0 && $i == 2)
                  echo "<div class=\"clear\"><br /></div>";
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
