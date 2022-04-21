<html lang="fr">
    <head>
        <title><?php echo $titre; ?> </title>
        <meta charset="utf-8">
        <meta name="description" content="Un site avec Bootstrap"/>
        <meta name="keywords" content ="site, bootstrap"/>
        <meta name="author" content="Antoine Baudry"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css" >
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- <header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=1">Personnes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=2">Films</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</header>
-->
		

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=1">Personnes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=2">Films</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=5">S'inscrire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=6">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=8">Deconnecter</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


