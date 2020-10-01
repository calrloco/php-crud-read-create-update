<?php
include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/partials/home/server.php';
?>



<div class="row mt-5">
  <div class="col-8 offset-2">
    <?php
    $class = 'alert-hidden';
    $message = '';
    if (!empty($_GET['roomId'])) {
      $class = '-success alert-show';
      $stanzaCancellata = $_GET['number'];
      $message = 'stanza ' . $stanzaCancellata . ' cancellata';
    } elseif(isset($_GET['roomId'])) {
      $class = '-danger alert-show';
      $message = 'Impossibile cancellare stanza';
      
    } ?>
    <div class="alert alert<?php echo $class ?> alert-hidden" role="alert">
      <?php echo $message ?>
    </div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ROOM NUMBER</th>
          <th scope="col">FLOOR</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $room) { ?>
          <tr>
            <td><?php echo $room['id']; ?></td>
            <td><?php echo $room['room_number']; ?></td>
            <td><?php echo $room['floor']; ?></td>
            <td><a href="show.php?id=<?php echo $room['id']; ?>"><button type="button" class="btn btn-info">View</button></a></td>
            <td><a href="update.php?id=<?php echo $room['id']; ?>"><button type="button" class="btn btn-success">Update</button></a></td>
            <td>
              <form action="partials/delete/server.php" method="post">
                <input type="submit" id="delete-room" class="btn btn-danger" name="delete" value="delete"></input>
                <input name="id" type="hidden" value="<?php echo $room['id'] ?>"></input>
                <input name="roomNumber" type="hidden" value="<?php echo $room['room_number'] ?>"></input>
              </form>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
<? include __DIR__ . '/partials/template/footer.php';?>