<!DOCTYPE html>
<html lang="en">
<body>
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
    <div class="container-fluid col-6" id="container">
        <h5 class="card-title">Liste des utilisateurs</h5>
        <br>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Checkbox</th>
                    <th>Action</th>
                <tr>
            </thead>
            <tbody>
                <?php foreach($list as $row) : ?>    
                <tr>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['telephone']?></td>
                    <td><?=$row['checkbox']?></td>
                    <td><a href="<?php echo base_url('contact/modifier_contact/'.$row['id']); ?>" class=" btn btn-primary ">Modifier<i class="fas fa-fw fa-wrench"></i></a>
                    <a href="<?php echo base_url('contact/delete_contact/'.$row['id']); ?>" class=" btn btn-primary ">Delete<i class="fas fa-fw fa-wrench"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
</body>
</html>