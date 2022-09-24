<!DOCTYPE html>
<html>
<head>
  <?php
    $title = "Забыли пароль?";
    require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function () {
    $("#done").bind("click", function () {
      $("#messageShow").hide();
      var email = $("#email").val();
      var fail = "";
      if (email.split ('@').length-1 == 0 || email.split ('.').length-1 == 0) fail = "Вы ввели некорректный e-mail";
      if (fail != "") {
        $("#messageShow").html(fail + "<div class='clear'><br /></div>");
        $("#messageShow").show();
        return false;
      }
      $.ajax ({
        url: 'ajax/forgotPassword.php',
        type: 'POST',
        data: ({'email': email}),
        dataType: 'html',
        success: function (data) {
          $("#messageShow").html(data + "<div class='clear'><br /></div>");
          $("#messageShow").show();
        }
      });
    });
  });

  </script>
</head>
<body>
  <?php require_once "blocks/header.php"?>
  <wrapper>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-9 col-lg-8">
          <div id="leftCol">
            <div class="regAuth">Забыли пароль?</div>
            <div class="already">Введите Ваш e-mail, мы вышлем на него ссылку для восстановления пароля</div>
            <input type="email" placeholder="E-mail" id="email" name="email"><br />

            <div id="messageShow"></div>
            <input type="button" id="done" name="done" value="Отправить">
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
