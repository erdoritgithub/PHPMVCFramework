<?php 
  /** @var $model \App\Models\User */
?>

<h1>Create an account</h1>

<?php $form = App\Core\Form\Form::begin('', "post"); ?>
  <div class="row">
    <div class="col">
      <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
      <?php echo $form->field($model, 'lastname') ?>
    </div>
  </div>
  
  <?php echo $form->field($model, 'email')->emailField(); ?>
  <?php echo $form->field($model, 'password')->passwordField(); ?>
  <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php echo App\Core\Form\Form::end(); ?>
