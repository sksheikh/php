<?php include "includes/header.php";?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 bg-transparent">
                    <img src="../assets/image/<?php echo $details['image'];?>" alt="" class=" card-img-top h-400">

                    <div class="card-body">
                        <h3 class="text-start mb-3"><?php echo $details['title'];?></h3>
                        <p class="text-start"><?php echo $details['description'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php";?>

