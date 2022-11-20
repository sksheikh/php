<?php include 'includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header mb-3">
                        <h2 class="text-center">
                            Series
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Starting Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="start_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Ending Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="end_number" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result : '' ?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Total Series</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($addResult) ? $addResult : '' ?>" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-4">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="series_btn" class="btn btn-success" value="Get result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
