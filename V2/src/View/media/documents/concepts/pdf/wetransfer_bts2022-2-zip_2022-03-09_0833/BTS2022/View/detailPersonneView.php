<?php
// $person est la Person à représenter ici
$name = $person->getName();
$firstName = $person->getFisrtName();
?>
<form class="box" action="" method="post" name="detailPersonne">
<legend>Détail :</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Nom</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="<?php echo "$name"?>" >
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Prénom</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" value="<?php echo "$firstName"?>" >
  </div>
</div>
<br>
<label for="films">Associer des films:</label>
  <select name="films" id="fimls">
    <?php
    foreach ($allFilmList as $film){
      $id = $film->getIdFilm();
      $name = $film->getName();
      echo "<option value='$id'>$name</option>";
    }
    ?>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
<p></p>
<h3>Films associés</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    // $filmList est la liste des films associés
    foreach ($filmList as $film) {
        $id = $film->getIdFilm();
        $name = $film->getName();
        echo "<tr class=\"table-active\">
        <td>$id</td>
        <td>$name</td>
        <td><a href=\"index.php?page=4&index=$id\" class=\"btn btn-primary\">Détail du film</a> </td>
        </tr>";
    }
    ?>
    
  </tbody>
</table>