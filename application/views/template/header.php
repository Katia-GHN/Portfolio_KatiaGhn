<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Katia G.</title>
	
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/pictures/favicon.ico" /> <!-- icone site -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bundle.js"></script>

</head>
<body id="NavBar1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <h1 class="col-2 m-3"><a href="<?php echo base_url('page_principale/index');?>">Katia Guerrouahen</a></h1>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#Profil-01">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#BTS-02">BTS SIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Projet-03">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Veille-04">Veille Informatique</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stage</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo base_url('user/index');?>">User</a>
                        <a class="dropdown-item" href="<?php echo base_url('contact/index');?>">Contact</a>
                    </div>
                </li>
				<li class="nav-item">
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown button
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('user/index');?>">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('contact/index');?>">Contact</a>
                </li>
            </ul>
        </div> 
    </nav>
</body>
</html>
