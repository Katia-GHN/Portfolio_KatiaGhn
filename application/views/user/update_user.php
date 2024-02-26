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
		<h1>Page des users</h1>
		<?php echo form_open('user/update_user/'.$usermodif[0]['user_id']);?>
		<div class="form-row">
			<div class="form-group col-6 ">
				<label for="Contact-nom-id">Nom</label>
				<input type="text" class="form-control" id="Contact-nom-id" name="user_prenom" value="<?php echo set_value('user_prenom', $usermodif[0]['user_prenom']); ?>">
			</div>
			<div class="form-group col-6">
				<label for="Contact-prenom-id">Prénom</label>
				<input type="text" class="form-control" id="Contact-prenom-id" name="user_nom" value="<?php echo set_value('user_nom', $usermodif[0]['user_nom']); ?>" >
			</div>
			<div class="form-group col-6">
				<label for="Contact-mail-id">Mail</label>
				<input type="text" class="form-control" id="Contact-mail-id" name="user_email" value="<?php echo set_value('user_email', $usermodif[0]['user_email']); ?>">
			</div>
			<div class="form-group col-6">
				<label for="Contact-telephone-id">Numéro de téléphone</label>
				<input type="text" class="form-control" id="Contact-telephone-id" name="user_adresse" value="<?php echo set_value('user_adresse', $usermodif[0]['user_adresse']); ?>">
			</div>
            <div class="form-group col-6">
				<label for="Contact-telephone-id">Numéro de téléphone</label>
				<input type="text" class="form-control" id="Contact-telephone-id" name="user_ville" value="<?php echo set_value('user_ville', $usermodif[0]['user_ville']); ?>">
			</div>
			<br>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="Check1-id" name="user_checkbox" value="<?php echo set_value('user_checkbox', $usermodif[0]['user_checkbox']); ?>">
				<label class="form-check-label" for="Check1-id">cochez-moi</label>
			</div>
			<br>
			<!-- submit -->
			<button type="submit" class="btn btn-primary">modifier</button>
		</div>
		<?php echo form_close(); ?>
	</div>