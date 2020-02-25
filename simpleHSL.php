<?php
    $saturation = isset($_GET["s"]) ? $_GET["s"] : 50;
    $lightness =isset($_GET["l"]) ? $_GET["l"] : 50;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Simple HSL</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
      <table class="table">
        <tbody>
          <tr>
            <?php
            for ($i = 0 ; $i < 36 ; $i++)
            {
            ?>
                <td style="border:0px; padding:0px; background-color:hsl(<?= $i * 10; ?>, <?= $saturation;?>%, <?= $lightness;?>%);">&nbsp;</td>
            <?php
            }
            ?>
          </tr>
        </tbody>
      </div>
    </div>
  </body>
</html>
