<!DOCTYPE html>
<html lang="en">
	<body>
<!-- validation form pour les msg erreurs-->
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
	<!-- formulaire contact -->	
	<div class="container-fluid col-7" id="container">
    	<h1>Page des contacts</h1>
		<br>
		<?php echo form_open('contact/create_contact'); ?>
			<div class="form-group col-6">
				<label for="Contact-nom-id">Nom</label>
				<input type="text" class="form-control" id="Contact-nom-id" name="nom">
			</div>
			<div class="form-group col-6">
				<label for="Contact-prenom-id">Prénom</label>
				<input type="text" class="form-control" id="Contact-prenom-id" name="prenom">
			</div>
			<div class="form-group col-6">
				<label for="Contact-mail-id">Mail</label>
				<input type="text" class="form-control" id="Contact-mail-id" name="email">
			</div>
			<div class="form-group col-6">
				<label for="Contact-telephone-id">Numéro de téléphone</label>
				<input type="text" class="form-control" id="Contact-telephone-id" name="telephone">
			</div>
			<br>
			<div class="form-check">
				<input type="checkbox" class="form-check-input" id="Check1-id" name="checkbox" value="1">
				<label class="form-check-label" for="Check1-id">cochez-moi</label>
			</div>
			<br>
			<!-- submit -->
			<button type="submit" class="btn btn-primary ">Entrer</button>         
		<?php echo form_close(); ?>
	</div>
	<!-- retour des résultats via les inputs ... reprend les colonnes de la bdd -->
	<div class="container-fluid col-7" id="container">
        <h1>Résultats du formulaire</h1>
        <p>Nom: <?php echo isset($nom) ? $nom : ''; ?></p>
        <p>Prénom: <?php echo isset($prenom) ? $prenom : ''; ?></p>
        <p>Email: <?php echo isset($email) ? $email : ''; ?></p>
        <p>Téléphone: <?php echo isset($telephone) ? $telephone : ''; ?></p>
        <p>Checkbox: <?php echo isset($checkbox) && $checkbox == 'on' ? 'Oui' : 'Non'; ?></p>
		<p>Id: <?php echo isset($id) ? $id : ''; ?></p>
    </div>
	<!-- circle-button modifier organization -->
	<a href="<?php echo base_url('contact/user_list'); ?>" class=" btn btn-primary ">Liste des contacts</a>
</body>
</html>