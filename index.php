<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daugink</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<div class="container">
    <div class="form">
<form action="./" method="POST">
<label for="fname">Dauginti iki:</label><br>
<input type="text" id="fname" name="multiply" value=""><br>
<input type="submit" value="Submit">
</form>
</div>
<div class="php"> <?php
if(isset($_POST["multiply"])){
   $skaicius = $_POST["multiply"];
   if($_POST["multiply"] == 0){
       print("Negali buti nulis");
   }
for($i = 1; $i <= $skaicius; $i++){
        $ats = $i * $skaicius;
        print($i . " * " . $skaicius . " = ". $ats . "<br>");
        $count += 1;

    // for($j = 1; $j <= $_POST["multiply"]; $j++){
    //     $ats = $i * $j;
    //     print($j . " * " . $i . " = ". $ats . "     ");
    //     $count += 1;      
    // }
    if($count == $_POST["multiply"]){print("<br>" . "<br>");}

} 
}
?>
</div>
</div>
</body>
</html>
