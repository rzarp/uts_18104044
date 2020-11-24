<?php
      $Nama = array(
                      array("1","Cristiano Messi","180","Striker"),
                      array("2","Bejo Leonardo","167","Midfielder"),
                      array("3","Alfa Midi","190","Defender")                          
                );

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>18104044_Reza Pramudita_TP</title>
  </head>
  <body>
<p class="h2 text-center">
  UTS Teori 
  <small class="text-muted">18104044_Reza Pramudita</small>
</p>
<br>
  <div class="row justify-content-center">
  <div class="col-auto">
    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Tinggi Badan</th>
            <th scope="col">Posisi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($Nama as $item):?>
          <?php endforeach; ?>
          <tr>
              <td><?= $Nama [0][0]?></td><td><?= $Nama [0][1]?></td><td><?= $Nama [0][2]?></td><td><?= $Nama [0][3]?></td>
            </tr>
            <tr>
              <td><?= $Nama [1][0]?></td><td><?= $Nama [1][1]?></td><td><?= $Nama [1][2]?></td><td><?= $Nama [1][3]?></td>
            </tr>
            <tr>
              <td><?= $Nama [2][0]?></td><td><?= $Nama [2][1]?></td><td><?= $Nama [2][2]?></td><td><?= $Nama [2][3]?></td>
            </tr>
        </tbody>
      </table>
      </div>
      </div>


    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>