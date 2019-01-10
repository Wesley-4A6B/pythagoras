<?php
    if(isset($_POST['submit'])) {
        
        if($_POST['zijdeA'] == "") {
            echo "<script>alert('Zijde a kan niet leeg zijn!')</script>";
            exit();
        }
        
        
        if($_POST['zijdeB'] == "") {
            echo "<script>alert('Zijde b kan niet leeg zijn!')</script>";
            exit();
        }
        
        
        
        
            $a = $_POST['zijdeA'];
            $b = $_POST['zijdeB'];
        
        
            $a2 = $a * $a;
            $b2 = $b * $b;
        
            $c = sqrt($a2 + $b2);
        
     }
?>