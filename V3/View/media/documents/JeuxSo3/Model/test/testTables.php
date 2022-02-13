<?php
include_once('./../DatabaseModel.php');
include_once('./../PatientModel.php');
include_once('./../SoignantModel.php');
// include_once('./../ScoreModel.php');

// $DatabaseModel = new DatabaseModel(false); //"localhost", "root", "YES", "bts2a_MemoryCardModel"
$connexionMySQL = DatabaseModel::connection_DatabaseModel();

$Patient = new Patient();
$patientsListe = $Patient->readPatient(true);

foreach ($patientsListe as $patient) {

    $id_patient = $patient[0];
    $nom_patient = $patient[1]; // echo "$idFilm : $name <br>";
    $prenom_patient = $patient[2];
    $datenaissance_patient = $patient[3];
    $motdepasse_patient = $patient[4];
    $pathologie_patient = $patient[5];
    $temps_patient = $patient[6];
    $score_patient = $patient[7];

    // $idPersonList = $patient->getPersonIdList();
    // foreach ($idPersonList as $idPerson) {
    //     echo "id = $idPerson ";
    // }
    // echo "<br>";

}

// foreach ($filmList as $film) {
//     $name = $film->getName();
//     $idFilm = $film->getIdFilm();
//     echo "$idFilm : $name <br>";
//     $idPersonList = $film->getPersonIdList();
//     foreach ($idPersonList as $idPerson) {
//         echo "id = $idPerson ";
//     }
//     echo "<br>";
// }

// $filmList = $manager->getFilmsFromDB();
// $film = $manager->addFilm("AAZZEE");
// $manager->deleteFilm($film->getIdFilm()); // detruire ce film

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: black;
        color: #66FF00;
        /* color: white; */
    }

    .Titre {
        text-align: center;
    }

    h2 {
        color: white;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">TestTable</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <section>
            <div class="Titre">
                <h1>Back-End Testing Connexion</h1>
            </div>
            <div>
                <h2> Teste $DatabaseModel : </h2>
                <!-- <pre><?php //var_dump($DatabaseModel); 
                            ?></pre> -->
                <!-- <pre><?php //print_r($DatabaseModel); 
                            ?></pre> -->
            </div>
            <div>
                <h2> Teste connection_DatabaseModel() : </h2>
                <!-- <pre><?php //var_dump($DatabaseModel->connection_DatabaseModel()); 
                            ?></pre> -->
                <pre><?= var_dump($connexionMySQL); ?></pre>
            </div>
            <div>
                <h2> Teste readPatient() : </h2>
                <!-- <pre><?php //var_dump($Patient->readPatient(true)); 
                            ?></pre> -->
                <pre><?php print_r($Patient->readPatient(true)); ?></pre>
            </div>
        </section>

        <section>
            <div>
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <?php
                            foreach ($patientsListe as $patient => $data) {
                                // echo "<th scope='col'>p{$patient}</th>";
                                // echo "<th scope='col'>d{$data}</th>";
                                foreach ($data as $champ => $value) {
                                    if (!is_int($champ)) {
                                        echo "<th scope='col'>{$champ}</th>";
                                    }
                                }
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // foreach ($patientsListe as $patient) {
                        // echo "<th scope='col'>{$patient['id_patient']}</th>";
                        // }
                        ?>
                        <tr class="table-active">
                            <th scope="row"><?= $id_patient; ?></th>
                            <td><?= $nom_patient; ?></td>
                            <td><?= $prenom_patient; ?></td>
                            <td><?= $datenaissance_patient; ?></td>
                            <td><?= $motdepasse_patient; ?></td>
                            <td><?= $pathologie_patient; ?></td>
                            <td><?= $temps_patient; ?></td>
                            <td><?= $score_patient; ?></td>
                        </tr>
                        <tr>
                            <?php foreach ($patient as $value) : ?>
                                <th scope="row"><?= $value; ?></th>
                                <td><?= $value; ?></td>
                            <?php endforeach; ?>

                            <?php
                            foreach ($patientsListe as $patient => $data) {
                                // echo "<th scope='col'>p{$patient}</th>";
                                // echo "<th scope='col'>d{$data}</th>";
                                // echo "<th scope='col'>{$data}</th>";
                                foreach ($data as $value) {
                                    if ($value % 2 == 0) {
                                        echo "<th scope='col'>{$value}</th>";
                                    }
                                }
                            }
                            ?>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

    </main>
</body>



<?php


/**
 * __autoload
 * @param $class_name les classes en .php
 */
// function _autoload($class_name)
// {
//     require 'class/' . $class_name . '.php';
// }

// function mon_autoloader($class_name)
// {
//     require 'class/' . $class_name . '.php';
// }
// spl_autoload_register('mon_autoloader');
?>