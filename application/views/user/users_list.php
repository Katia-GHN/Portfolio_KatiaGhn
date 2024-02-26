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
        <h5 class="card-title">Liste des utilisateurs / Users</h5>
        <br>
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Checkbox</th>
                    <th>Action</th>
                <tr>
            </thead>
            <tbody>
                <?php foreach($list as $row) : ?>    
                <tr>
                    <td><?=$row['user_prenom']?></td>
                    <td><?=$row['user_nom']?></td>
                    <td><?=$row['user_email']?></td>
                    <td><?=$row['user_adresse']?></td>
                    <td><?=$row['user_ville']?></td>
                    <td><?=$row['user_checkbox']?></td>
                    <!-- modifier-->
                    <td><a href="<?php echo base_url('user/update_user/'.$row['user_id']); ?>" class=" btn btn-primary ">Modifier<i class="fas fa-fw fa-wrench"></i></a>
                    <!-- supprimer -->
                    <a href="<?php echo base_url('user/delete_user/'.$row['user_id']); ?>" class=" btn btn-primary ">Supprimer<i class="fas fa-fw fa-wrench"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
</body>
</html>