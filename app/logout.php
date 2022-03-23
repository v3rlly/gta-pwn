<?php require("inc/header.php"); ?>

<?php
session_unset();
session_destroy();
?>

<div class="container-fluid">
    <h1>Bye bye..</h1>
</div>

<script>
setTimeout(function(){
    window.location.href = '/';
}, 500);
</script>
<?php require("inc/footer.php"); ?>
