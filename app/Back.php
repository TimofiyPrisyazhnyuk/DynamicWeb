<!doctype html>
<html lang=ru>
<head>
    <?php
    $title = "Обратная связь";
    require_once "../blocks/head.php"
    ?>
</head>
<body>
<?php  require_once "../blocks/header.php"?>

<main id="wrapper">
    <div id="leftCol">
        <input type="text" placeholder="Name" id="name" name="name"><br>
        <input type="text" placeholder="Email" id="Email" name="Email"><br>
        <input type="text" placeholder="Subject" id="Subject" name="Subject"><br>
        <textarea name="message" placeholder="Your message..." id="message" cols="30" rows="10"></textarea><br>
        <div id="messageShow"></div>
        <input type="button" name="done" id="done" value="Отправить">
    </div>
    <?php  require_once "../blocks/rightCol.php"?>
</main>
<?php  require_once "../blocks/footer.php"?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
    $(document).ready(function () {
       $("#done").on('click', function () {
           var MessageShow = $("#messageShow").hide();
         var name = $("#name").val();
         var Email = $("#Email").val();
         var Subject = $("#Subject").val();
         var message = $("#message").val();
         var fail = "";
         if(name.length < 3) {
             fail = "Введите Name не меньше 3 символов";
         } else if (Email.split('@').length - 1 == 0 || Email.split('.').length - 1 ==0) {
             fail = "Вы ввели некоректный Email"
         } else if(Subject.length < 5) {
             fail = "Тема сообщения не менее 5 символов"
         }else if(message.length < 10) {
             fail = "Сообщение не менее 10 символов"
         }
         if (fail != ""){
             MessageShow.html(fail + "<div class='clear'><br></div>");
             MessageShow.show();
             return false;
         }
         $.ajax({
            url: "ajax/ajax.php",
            type: "POST",
            cache: 'false',
            data: {"name": name, "Email": Email, "Subject": Subject, "message": message},
            dataType: 'html',
            success: function (data) {
                if (data){
                    MessageShow.html(data + "<div class='clear'><br></div>");
                    MessageShow.show();
                }
            }
         });
       });
    });

</script>
</body>
</html>