<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
    </tr>
  </thead>
  <tbody>
    <?php
    session_start(); 
    foreach ($personList as $person) {
        $id = $person->getIdPerson();
        $name = $person->getName();
        $firstName = $person->getFisrtName();
        echo "<tr class=\"table-active\">
        <td>$id</td>
        <td>$name</td>
        <td>$firstName</td>
        <td><a href=\"index.php?page=3&index=$id\" class=\"btn btn-primary\">Vue de détail</a> </td>";
        if (isset($_SESSION['user'])) {
          echo "<td><a href=\"index.php?page=7&index=$id\" class=\"btn btn-primary\">Supprimer</a> </td>";
        }
        echo "</tr>";
    }
    ?>
    
  </tbody>
</table>
<img class="img-fluid" src="./view/blank.png" height="300">
