<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>

    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <span class="navbar-brand mr-5"><a class="" href="<?php echo ROOT_URL; ?>">Shareboard</a></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
                </ul>

                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['is_logged_in'])) : ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>

                    <?php else : ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- <div class="row"> -->
        <?php Messages::display(); ?>
        <?php require($view); ?>
        <!-- </div> -->

    </div><!-- /.container -->
</body>

</html>