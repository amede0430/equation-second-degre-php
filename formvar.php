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
<input name="a"  placeholder='a' class="var" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>" >
<span>x² +</span>
<input name="b"  placeholder='b' class="var" value="<?php echo isset($_POST['b']) ? $_POST['b'] : ''; ?>" >
<span>x +</span>
<input name="c"  placeholder='c' class="var" value="<?php echo isset($_POST['c']) ? $_POST['c'] : ''; ?>" >
<span>= 0</span>
</p>
<input type="submit" value="Résoudre" class="bouton" />
</form>
</div>
