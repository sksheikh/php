<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--Navigation menu-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand text-uppercase">Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=add-student" class="nav-link">Add student</a></li>
            <li class="dropdown">
                <a href="action.php?page=add-student" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="#dropdown_nav">Categories</a>
                <ul class="dropdown-menu">
                    <?php foreach ($resultCategories as $result){?>
                    <li ><a href="" class="dropdown-item text-capitalize"><?php echo $result['name']?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>