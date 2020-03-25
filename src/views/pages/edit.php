<?php $render('header'); ?>

<h3>Editar Usuario!</h3>

<form method="post" action="<?php echo $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
  <label>
   Nome:<br/>
   <input type="text" name="name" value="<?= $usuario['nome']; ?>">
 </label><br/><br/>
 <label>
  Email<br/>
  <input type="email" name="email" value="<?= $usuario['email']; ?>">
</label><br/><br/>
<input type="submit" value="Editar">
</form>

<?php $render('footer'); ?>
