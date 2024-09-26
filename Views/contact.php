<?php 
/** @var \App\Core\View */

use App\Core\Form\TextareaField;

/** @var \App\Models\ContactForm */

$this->title = 'Contact Us'; 
?>

<h1>Contact Us</h1>

<?php $form = \App\Core\Form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \App\Core\Form\Form::end() ?>
