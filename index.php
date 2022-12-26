<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test</title>
</head>

<style>
    .btn{
        width:200px;
        background-color:lightblue;
        height: 200px;        
        border: 2px solid red;
    }
    .btn button{
        margin: 90px 70px;
    }
</style>

<!-- <body>
    <div class="btn">
    <button><a href="process/process.php">Run</a></button>
</div> -->

<h2>HTML Forms</h2>

<!-- ما بزبط ال Requerd في ال Front end  -->
<form action="process/process.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" Required><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br>
  <label for="fname">Age:</label><br>
  <input type="text" id="age" name="age" value="20"><br>
  <label for="age">Mager:</label><br>
  <input type="text" id="mager" name="mager" value="SE"><br><br>
  <input type="submit" value="Submit">
</form> 

<!-- <form action="process/process.php" method="get">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>  -->

<button><a href="process/process.php?fname='Ahmad'&lname='Ghanem'&age=20&mager='SE'">Run</a></button>

</body>
</html>