<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>first php app</title>
  </head>
  <body>

    <form name="form" action="" method="get">
        Name: <input id="name" name="name" type="text"/><br>
        E-mail: <input id="mail" name="mail" type="text"/><br>
        <input type="submit" value="Done"/>
    </form>


    <?php
        $myfile = fopen("loginData.txt", "a");
        $txt = "Login name : ".$_GET["name"]."\r\n".
               "E-mail : ".$_GET["mail"]."\r\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        // echo "Your data has been saved in a text file!";
    ?>

  </body>
</html>
