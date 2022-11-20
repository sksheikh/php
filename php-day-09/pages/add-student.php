<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <h3 class="text-center">Add Student</h3>
                    <div class="card-body">
                        <form action="action.php" method="POST" class="">
                            <div class="row mt-2">
                                <label class="col-md-4">Select Category</label>
                                <div class="col-md-8">
                                    <select name="" id="" class="form-select">
                                        <option value="male">Select a Category</option>
                                        <?php foreach ($resultCategories as $category){?>
                                        <option class="text-capitalize" value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Phone</label>
                               <div class="col-md-8">
                                   <input type="tel" name="phone" class="form-control">
                               </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Name</label>
                               <div class="col-md-8">
                                   <textarea name="address" id=""  rows="5" class="form-control"></textarea>
                               </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="Add student" class="btn btn-success">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>