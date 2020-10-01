<?php
include __DIR__ . '/partials/template/header.php';
?>
<div class="row mt-5">
    <div class="col-4 offset-4 ">

        <form method="post" action="partials/create/server.php">
            <div class="form-group">
                <label for="roomNumber">Numero della stanza</label>
                <input value="" type="number" class="form-control" id="exampleFormControlInput1" name="roomNumber" id="roomNumber">
            </div>
            <div class="form-group">
                <label for="floor">Piano</label>
                <input value="" type="number" class="form-control" id="exampleFormControlInput1" name="floor" id="floor">
            </div>
            <div class="form-group">
                <label for="letti">Letti</label>
                <input value="" type="number" class="form-control" id="exampleFormControlInput1" name="beds" id="letti">
            </div>
            <input type="submit" class="btn btn-primary" value="insert"></input>
        </form>

    </div>
</div>
</body>

</html>
<? include __DIR__ . '/partials/template/footer.php';?>