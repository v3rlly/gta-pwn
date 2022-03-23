<?php require("inc/header.php"); ?>

<?php
$status = 'undefined';

if(isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0)
    {
        $_SESSION["username"] = $username;
        $_SESSION["authenticated"] = true;
        $status = 'success';
    }
    else
    {
        $status = 'failed';
    }
}
?>

<div class="container" id="root">
    <div class="row align-items-center justify-content-md-center h-100">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header" id="status"></div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const status = '<?=$status?>';

    if(status === 'success')
    {
        document.querySelector("div#status").innerHTML = '<h4 class="h4 text-center text-success"> Authentication success! Redirecting to admin area.. </h4>';
        setTimeout(function(){
            window.location.href = '/admin.php';
        }, 3000);
    }
    else if(status === 'failed')
    {
        document.querySelector("div#status").innerHTML = '<h4 class="h4 text-center text-danger"> Authentication failed. </h4>';
    }
    else
    {
        document.querySelector("div#status").innerHTML = '<h4 class="h4 text-center text-info"> Faca login para continuar </h4>';
    }

</script>

<?php require("inc/footer.php"); ?>
