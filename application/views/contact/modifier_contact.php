<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<body>
<!-- validation form -->
<div>
        <?php if($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible fade show my-5">
        	<?php echo $this->session->flashdata('success') ?>
			</div>
        <?php endif; ?>

        <?php if(validation_errors()): ?>
			<div class="alert alert-danger alert-dismissible fade show my-5">
				<?php echo validation_errors('<p>', '</p>'); ?>
			</div>
        <?php endif; ?>

        <?php if($this->session->flashdata('error')): ?>
			<div class="alert alert-danger">
			<?php echo $this->session->flashdata('error') ?>
			</div>
        <?php endif; ?>
</div> 
<!-- form contact -->
<div class="container-fluid col-7" id="container">
		<h1>Page des contacts</h1>
		<?php echo form_open('contact/modifier_contact/'.$contact[0]['id']);?>
		<div class="form-row">
			<div class="form-group col-6 ">
				<label for="Contact-nom-id">Nom</label>
				<input type="text" class="form-control" id="Contact-nom-id" name="nom" value="<?php echo set_value('nom', $contact[0]['nom']); ?>">
			</div>
			<div class="form-group col-6">
				<label for="Contact-prenom-id">Prénom</label>
				<input type="text" class="form-control" id="Contact-prenom-id" name="prenom" value="<?php echo set_value('prenom', $contact[0]['prenom']); ?>" >
			</div>
			<div class="form-group col-6">
				<label for="Contact-mail-id">Mail</label>
				<input type="text" class="form-control" id="Contact-mail-id" name="email" value="<?php echo set_value('email', $contact[0]['email']); ?>">
			</div>
			<div class="form-group col-6">
				<label for="Contact-telephone-id">Numéro de téléphone</label>
				<input type="text" class="form-control" id="Contact-telephone-id" name="telephone" value="<?php echo set_value('telephone', $contact[0]['telephone']); ?>">
			</div>
			<br>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="Check1-id" name="checkbox" value="<?php echo set_value('checkbox', $contact[0]['checkbox']); ?>">
				<label class="form-check-label" for="Check1-id">cochez-moi</label>
			</div>
			<br>
			<!-- submit -->
			<button type="submit" class="btn btn-primary">modifier</button>
		</div>
		<?php echo form_close(); ?>
	</div>

	

</body>


</html>