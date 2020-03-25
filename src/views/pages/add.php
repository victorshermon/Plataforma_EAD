<?php $render('header'); ?>

<h3>Adicionar Novo Usuario!</h3>

<form method="post" action="<?php echo $base; ?>/novo">
  <label>
   Nome:<br/>
   <input type="text" name="name">
 </label><br/><br/>
 <label>
  Email<br/>
  <input type="email" name="email">
</label><br/><br/>
<input type="submit" value="Cadastrar">
</form>

<?php $render('footer'); ?>
