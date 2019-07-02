<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="content">
    <div class="ivan">
        <h1>Иван</h1>
        <p>Толкнул землю: <?php include 'php/sum_ivan.php'; ?></p>
        
        <button class="pushups" type="button"><a href="php/ivan_add.php">Вести отжимания</a></button>

        <table id="ivan_results">
        <?php
            include  'php/ivan_result.php';
        ?>

        </table>
        
    </div>

    <div class="kostja">
    <h1>Константин</h1>
    <p> Толкнул землю: <?php include 'php/sum_kostja.php'; ?></p>
        <button class="pushups" type="button"><a href="php/kostja_add.php">Вести отжимания</a></button>

        <table id="main" > 
        <?php
            include  'php/kostja_result.php';
        ?>

        </table>
        
    </div>
    

    </div>
    
   
    
    </script>
</body>
</html>