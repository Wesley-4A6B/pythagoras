<?php 
    session_start();
    require("pythagoras.php");
?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <title>Wesley Keiman - Pythagoras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        
        <style>
            #driehoek {
                width: 0;
                height: 0;
                
            }
        </style>
    </head>
    
    <body>
        <header>
            <h1>Pythagoras</h1>
        </header>
        <br>
        
        <form method="post" action="index.php">
        
            <span class="zijde">Zijde A: </span>

            <input type="text" name="zijdeA" class="pixels" placeholder="Pixels">&nbsp; pixels <br> <br> 

            <span class="zijde">Zijde B: </span>

            <input type="text" name="zijdeB" class="pixels" placeholder="Pixels">&nbsp; pixels <br> <br>

            <input type="submit" name="submit" class="submit" value="Bereken zijde C">
            
        </form>
        <br>
        
        <div id="c"> </div>
        <br><br><br><br><br>
            <div id="driehoek" style="
                    border-left:<?php if(isset($_POST['submit'])) { echo $a2; } ?>px solid blue;
                       border-bottom:<?php if(isset($_POST['submit'])) { echo $b2; } ?>px solid blue;
                       border-top:<?php if(isset($_POST['submit'])) { echo $a2; } ?>px solid transparent;
                       border-right:<?php if(isset($_POST['submit'])) { echo $b2; } ?>px solid transparent;
                      ">  
            </div>

        <script>
            document.getElementById("c").innerHTML = "De schuine zijde is " + <?php echo $c; ?> + " pixels";
        </script>
        
        
        
   
    
    </body>





</html>