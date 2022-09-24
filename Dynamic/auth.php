<!DOCTYPE html>
<html>
<head>
  <?php
    $title = "Вход";
    require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function () {
    $("#done").bind("click", function () {
      $("#messageShow").hide();
      var email = $("#email").val();
      var password = $("#password").val();
      var fail = "";
      if (email.split ('@').length-1 == 0 || email.split ('.').length-1 == 0) fail = "Вы ввели некорректный e-mail";
      else if (password.length < 6) fail = "Пароль не меньше 6 знаков";
      if (fail != "") {
        $("#messageShow").html(fail + "<div class='clear'><br /></div>");
        $("#messageShow").show();
        return false;
      }
      $.ajax ({
        url: 'ajax/auth.php',
        type: 'POST',
        data: ({'email': email, 'password': password}),
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
            <div class="regAuth">Логин</div>
            <div class="already">Еще не зарегистрированы? <a href="reg.php">Регистрация</a></div>
            <input type="email" placeholder="E-mail" id="email" name="email"><br />
            <input type="password" placeholder="Пароль" id="password" name="password"><br />

            <div class="already"><a href="forgotPassword.php">Не помню пароль</a></div>
            <div id="messageShow"></div>
            <input type="button" id="done" name="done" value="Войти">
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
