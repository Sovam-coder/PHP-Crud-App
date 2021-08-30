<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Phoenix List User</title>
    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
    </style>
  </head>
  <body>
    
    <?php
    $con = mysqli_connect('localhost', 'root', '','phoenix');
    if ($con == false) {
        echo "Error in database connection!!";
  }
  else {
    $select = "SELECT * FROM `register`";
    $query = mysqli_query($con, $select);
    while ($row = mysqli_fetch_assoc($query)) {

     echo ' <div class="jumbotron" style="background-color: rgb(223, 219, 219);">
        <br>
        <div class="container">
            <div class="row">
              <div class="col-sm">';
              echo "<img src='images/" . $row['image'] . "' class='rounded-circle' alt='' width='50%' />";
              
             echo ' </div>
              <div class="col-sm-5">';
              echo "<h4> Username  :" . $row["uname"] . "</h4>";
              echo "<h4> Contact  Number:" . $row["contact"] . "</h4>";
              echo "<h4> Email :" . $row["email"] . "</h4>"; 

             echo '</div>
              <div class="col-5">';
              echo "<h4> Address:" . $row["addr"] . "</h4>";
              echo "<h4> Gender :" . $row["gender"] . "</h4>";
              echo " <a href='delete.php?cd=$row[id]'>";
              echo '<button type="button" class="btn btn-danger">Delete </button></a>';
           echo ' </div>
          </div>
        
    </div>';
   
    }
   }
?>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>