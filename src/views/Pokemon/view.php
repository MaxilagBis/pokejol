<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Pokémon</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($donnees = $req->fetch()) { ?>

      <tr>
        <th scope="row">
          <?php echo $donnees['id']; ?>
        </th>
        <td>
          <?php echo $donnees['name']; ?>
        </td>
      </tr>

    <?php }; $req->closeCursor(); ?>
  </tbody>
</table>
