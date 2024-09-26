<?php 
  /** @var $model \App\Models\User */
?>

<h1>Sign in to your account</h1>

<?php $form = App\Core\Form\Form::begin('', "post"); ?>
  <?php echo $form->field($model, 'email')->emailField(); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo App\Core\Form\Form::end(); ?>
