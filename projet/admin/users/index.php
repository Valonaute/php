<?php
require '../../config/connexion.php';
require '../../includes/header.php';

$requete = $pdo->query("SELECT * FROM users");
$users = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if(count($users) >0){ ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($users as $user){ ?>
    <tr>
      <th scope="row"><?= $user['id_user'] ?></th>
      <td><?= $user['prenom']?></td>
      <td><?= $user['nom']?></td>
      <td><?= $user['email']?></td>
      <td><a href="delete.php?id_user=<?= $user['id_user']?>" class="alert-danger">Supprimer </a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php } else {
    echo "Il n'y a pas encore d'utilisateurs !";
} ?>

<a href="create.php" class="btn btn-primary" style='padding: 150 px; margin-left:300px'> Créer un utilisateur </a>
<a href="../connected.php" class="btn btn-success" style='padding: 150 px; margin-left:600px'> Menu Admin </a><br><br>

<?php
require '../../includes/footer.php';
?>