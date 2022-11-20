<?php include 'includes/header.php'; ?>
<h1 class="text-center text-uppercase text-warning mt-5">Category Page</h1>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ ?>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img src="<?php echo $product['image']?>" alt="" class="card-img-top" style="height: ">
                    </div>
                    <div class="card-body">
                        <h3><?php echo $product['name'] ?></h3>
                        <span>Price: <?php echo $product['price'] ?></span>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</section>

<?php include 'includes/footer.php'?>
