<div class="table-container">
  <table class="table is-bordered">
    <tr>
      <th>Prioriteit</th>
      <th>Name</th>
      <th>Description</th>
      <?php if (!isset($_SESSION['secret_key'])) { ?>
        <th>Delete</th>
      <?php } ?>
      <?php if (isset($_SESSION['secret_key'])) { ?>
        <th>Bought!</th>
      <?php } ?>
    </tr>
    <?php
    if (!isset($_SESSION['secret_key'])) {
      ?>

      <tbody class="row_position">

      <?php
      } else {
        ?>

      <tbody>

      <?php
      }
      ?>

      <?php
      $user_id = $_SESSION['user_id'];

      if (isset($_SESSION['secret_key'])) {
        $sql = "SELECT * FROM item_table WHERE user_id='$user_id' AND bought='no' ORDER BY priority ";
      } else {
        $sql = "SELECT * FROM item_table WHERE user_id='$user_id' ORDER BY priority ";
      }
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>
          <tr id="<?php echo $row['id'] ?>">
            <td><?php echo $row['priority'] ?></td>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <?php if (!isset($_SESSION['secret_key'])) { ?>
              <td><a href="scripts/delete.php?item_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="button is-danger">Delete</a></td>
            <?php } ?>
            <?php if (isset($_SESSION['secret_key'])) {
                  ?>
              <td><a href="scripts/bought.php?item_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')" class="button is-danger">I Bought it</a></td>
            <?php } ?>

          </tr>
        <?php }
        } else {
          ?>

      </tbody>
  </table>
</div>

<?php if (!isset($_SESSION['secret_key'])) { ?>
  <p>There are no items added yet. <br><a href="dashboard.php">Click here to add items.</a></p>
<?php } else {
    ?> <p>All items have been bought!</p>
<?php
  }
} ?>