<?php include 'includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <span><?php echo isset($message)?$message: ''; ?></span>
                        <form action="" method="post">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" >
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" value="Login" name="btn" class="btn btn-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'?>
