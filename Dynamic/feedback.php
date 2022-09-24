<!DOCTYPE html>
<html>
<head>
  <?php
    $title = "Обратная связь";
    require_once "blocks/head.php";
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready (function () {
      $("#done").click(function () {
        $("#messageShow").hide();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail = "";
        if (name.length < 3) fail = "Имя не меньше 3 символов";
        else if (email.split ('@').length-1 == 0 || email.split ('.').length-1 == 0) fail = "Вы ввели некорректный e-mail";
        else if (subject == "") fail = "Введите тему сообщения";
        else if (message == "") fail = "Введите сообщение";
        if (fail != "") {
          $("#messageShow").html(fail + "<div class='clear'><br /></div>");
          $("#messageShow").show();
          return false;
        }
        $.ajax ({
					url: '/ajax/feedback.php',
					type: 'POST',
					cache: false,
					data: {'name': name, 'email': email, 'subject': subject, 'message': message},
					dataType: 'html',
					success: function (data) {
						$('#messageShow').html (data + "<div class='clear'><br></div>");
            $('#messageShow').show ();
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
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="email" placeholder="E-mail" id="email" name="email"><br />
            <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br />
            <textarea name="message" id="message" placeholder="Введите Ваше сообщение"></textarea><br />
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
