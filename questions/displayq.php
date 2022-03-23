<?php
    session_start();
    include("../login/connection.php");
    include("../login/functions.php");
    include("qfunctions.php");
    include("qconnection.php");
    $user_data = check_login($con);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
    <div class="container-fluid p-5">
        <?php
            $sql = "SELECT * from questions";

            $result = $con -> query($sql);

            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo "<span>". $row["question_id"]."</span> <span>". $row["poster_id"]."</span><span>". $row["question"]."</span";
                }
            } else {
                echo "zero rows";
            }
        ?>
        
    </div>
</body>
</html>