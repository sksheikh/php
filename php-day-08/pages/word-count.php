<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <h2 class="text-center">Count Word & Character</h2>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="">Input text:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="input_text" value="<?php echo isset($result['inputString'])?$result['inputString'] : ''?>" placeholder="Enter your text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="">Result Word:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result['totalWord']) ? $result['totalWord'] : ''?>" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="">Result Charecter:</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" value="<?php echo isset($result) ? $result['totalChar']: ''?>" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <input type="submit" name="btn_count" value="Count me" class="btn btn-info text-white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
