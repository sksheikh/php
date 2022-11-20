<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-2">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_number" class="form-control"  placeholder="First number">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_number" class="form-control"  placeholder="Last number">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Action</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="actions" value="+"> +</label>
                                    <label for=""><input type="radio" name="actions" value="-"> -</label>
                                    <label for=""><input type="radio" name="actions" value="*"> *</label>
                                    <label for=""><input type="radio" name="actions" value="/"> /</label>
                                    <label for=""><input type="radio" name="actions" value="%"> %</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label  class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result: ''?>" name="" class="form-control"  placeholder="Result">
                                </div>
                            </div>
                            <div class="row ">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="result_submit" class="btn btn-success" value="submit">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

