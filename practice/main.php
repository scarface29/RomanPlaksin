<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>    
<body>

    <div class="flex-container">


        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>

        </div>

        <div class="about_me">
            <h1> <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="images/php.png">'; ?>
                </div>


                <div class="fullname">
                    
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                      echo 'город', ' ', $city; ?>
                    </p>
                 
                 
                    <p> Мне
                    <?php echo $age; ?>
                    года </p>
                    <p> Мы изучили переменные </p>
                    <p> Научились делать с ними простые операции </p>
                </div>


            </div>

            <div class="knowledge">
                    <?php include 'knowledge.inc.php'; ?>
                    <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                    

            </div>

            <div class="article">
                <p class="text">
                    Veni, Vidi, Vici.
                    Alea jacta est.
                    Ave Caesar, imperator, morituri te salutant.
                    Suae quisque fortunae faber.
                </p>
            </div>

                
        
    

         <?php include 'footer.inc.php'?>
    </div>
    






</body>
</html>