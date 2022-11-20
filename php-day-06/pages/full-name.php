<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Get Full Name</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-2">
                                <label for="firstName" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control" id="firstName" placeholder="First name">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="lastName" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="fullName" class="col-md-4">full Name</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result: ''?>" name="" class="form-control" id="fullName" placeholder="Full name">
                                </div>
                            </div>
                            <div class="row ">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="full_name_btn" class="btn btn-success" value="Get Full Name">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
