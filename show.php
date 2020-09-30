<?php
include __DIR__ . '/partials/template/header.php';
include __DIR__ . '/partials/show/server.php';
?>

<div class="row mt-5">
    <div class="col-4 offset-4 align-self-start">
        <ul class="list-group text-white">
            <li class="list-group-item bg-dark">ID: <?php echo $row['id'] ?></li>
            <li class="list-group-item bg-dark">Numero della Stanza: <?php echo $row['room_number'] ?></li>
            <li class="list-group-item bg-dark">Piano: <?php echo $row['floor'] ?></li>
            <li class="list-group-item bg-dark">Numero letti: <?php echo $row['beds'] ?></li>
        </ul>
        <a href="index.php"><button type="button" class="btn btn-primary mt-5">Back</button></a>
    </div>
</div>


<? include __DIR__ . '/partials/template/footer.php';?>