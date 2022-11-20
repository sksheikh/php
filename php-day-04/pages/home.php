
<?php
include "includes/header.php";
?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($allProducts as $products){?>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <img src="<?php echo $products['image']?>" alt="" class="card-img-top img-height">
                    <div class="card-body">
                        <h3><?php echo $products['name']?></h3>
                        <p>Price: <?php echo $products['price']?> BDT</p>
                        <a href="" class="btn btn-outline-warning">View</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>


<?php
    include "includes/footer.php";
?>