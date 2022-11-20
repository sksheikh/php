<?php include 'includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header mb-3">
                        <h2 class="text-center">
                            Calculator
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Fisrt Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="first_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="last_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="number" value="<?php echo isset($result) ? $result :''?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4">Actions</label>
                                <div class="col-md-8">
                                    <label for=""><input checked type="radio" name="actions" value="+">+</label>
                                    <label for=""><input type="radio" name="actions" value="-">-</label>
                                    <label for=""><input type="radio" name="actions" value="*">*</label>
                                    <label for=""><input type="radio" name="actions" value="/">/</label>
                                    <label for=""><input type="radio" name="actions" value="%">%</label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="calculator_btn" class="btn btn-success" value="Get result">
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
