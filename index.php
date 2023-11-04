<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Equation second dégré.</title>
</head>
<body>
<div class="front">


<?php
// si c'est pas bien rempli
if( !isset($_POST['a']) or !is_numeric($_POST['a'])  or !isset($_POST['b']) or !is_numeric($_POST['b'])  or !isset($_POST['c']) or !is_numeric($_POST['c'])){
    ?>
<p class="description">
Bienvenu sur notre site résolution d'équation. <br>Nous vous proposons un outil convivial pour résoudre des équations complexes du second degré rapidement grâce à notre algorithme avancé.
 Obtenez des solutions précises en un clin d'œil !
</p>
<div >
<h2>
 Equation du second dégré
</h2>
<form action="index.php" method="post">
<p>
<input name="a"  placeholder='a' class="var" value="">
<span>x² +</span>
<input name="b"  placeholder='b' class="var" value="" >
<span>x +</span>
<input name="c"  placeholder='c' class="var" value="">
<span>= 0</span>
</p>
<input type="submit" value="Résoudre" class="bouton" />
</form>
</div>


<?php

//si tous les champs sont bien renseignés
}else {
    include("formvar.php");

    $var_a=$_POST['a'];
    $var_b=$_POST['b'];
    $var_c=$_POST['c'];
    $delta= $var_b**2 - 4*$var_a*$var_c;
    $arrondi=4;
    if ($var_a==0) {
        ?>
       <p class="red">L'équation n'est pas du second degré.</p>
<?php
       if ($var_b!=0) {
        ?>
       <p class="green">Certe la résolution donne: x = <?php echo round(-$var_c/($var_b),$arrondi) ?>.(Equation du premier degré)</p>
<?php
       }else {
        ?>
     <p class="red">Résolution impossible: Aucune valeur de x trouvé.</p>
<?php
       }
        ?>
       
<?php
    }else{
        if ($delta<0) {
        ?>
        <p class="red">L'équation n'admet pas de solution réelle.</p>
        <p class="green">Cependant dans le monde des imaginaires on trouve deux solutions:</p>
<?php
            if ($var_b==0) {
                ?>
                <span class="green"> x1=<?php echo round(sqrt(-$delta)/(2*$var_a),$arrondi) ?>i et </span> 
                <span class="green"> x2=<?php echo round(-1*sqrt(-$delta)/(2*$var_a),$arrondi) ?>i .</span>  
            <?php   
            }else{
                if ($var_a > 0) {
        ?>
                
        <span class="green"> x1= <?php echo round(-$var_b/(2*$var_a),$arrondi)  ?>-<?php echo round(sqrt(-$delta)/(2*$var_a),$arrondi) ?>i et </span> 
        <span class="green"> x2= <?php echo round(-$var_b/(2*$var_a),$arrondi)  ?>+<?php echo round(sqrt(-$delta)/(2*$var_a),$arrondi) ?>i .</span> 
        <?php      
      }else {
        ?>
         
              <span class="green"> x1= <?php echo round(-$var_b/(2*$var_a),$arrondi)  ?>-<?php echo round(-sqrt(-$delta)/(2*$var_a),$arrondi) ?>i et </span> 
              <span class="green"> x2= <?php echo round(-$var_b/(2*$var_a),$arrondi)  ?>+<?php echo round(-sqrt(-$delta)/(2*$var_a),$arrondi) ?>i .</span>  
              <?php 
        } 
        }
        }    
        elseif ($delta==0) {
        ?> 
        <p class="green" >L'equation admet une solution double: x0 = <?php echo round(-$var_b/(2*$var_a),$arrondi) ?>.</p>
       <?php 
        }
        else {
        ?>
        <p class="green">L'équation admet deux solutions distinctes: x1 = <?php echo round((-$var_b+sqrt($delta))/(2*$var_a),$arrondi) ?> et x2 = <?php echo round((-$var_b-sqrt($delta))/(2*$var_a),$arrondi) ?>.</p>
        <?php     
        }
        }
        }
        ?>
</div>
</body>
</html>