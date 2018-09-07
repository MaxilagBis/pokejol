<?php
while ($donnees = $req->fetch())
{
?>
<div>
  <h3>
    <?php echo $donnees['name']; ?>
  </h3>
  <br>
</div>
<?php
}
$req->closeCursor();
?>
