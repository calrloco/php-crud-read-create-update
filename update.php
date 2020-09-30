<?php
include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/partials/update/server.php';
?>
<div class="row mt-5">
    <div class="col-4 offset-4 ">
        
        <form method="post" action="partials/update/server-edit.php">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input value="<?php echo $row['room_number']; ?>" type="text" class="form-control" id="exampleFormControlInput1" name="roomNumber" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="floor">Piano</label>
                <input value="<?php echo $row['floor']; ?>" type="text" class="form-control" id="exampleFormControlInput1" name="floor" id="floor">
            </div>
            <div class="form-group">
                <label for="letti">Letti</label>
                <input value="<?php echo $row['beds']; ?>" type="text" class="form-control" id="exampleFormControlInput1" name="beds" id="letti">
            </div>
            <input value="<?php echo $row['id'] ?>" name="id" type="hidden" class="form-control" id="exampleFormControlInput1" name="<?php echo $row['id'] ?>" id="letti">
            <input type="submit" class="btn btn-primary" value="modifica"></input>
        </form>

    </div>
</div>
</body>

</html>
<? include __DIR__ . '/partials/template/footer.php';?>