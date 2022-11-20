

<?php include 'includes/header.php'; ?>



<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach($allBlogs as $data){?>
            <div class="col-md-4">
                <div class="card h-100 shadow border-0">
                    <img src="assets/image/<?php echo $data['image']?>" alt="" class="card-img-top h-300">
                    <div class="card-body">
                        <h3 class="fw-bold" style="font-size: 20px;"><?php echo $data['title']?></h3>
                        <p class="" style="font-size: 16px;"><?php echo substr_replace($data['description'],'....',200)?></p>
                        <a href="action.php?page=details&&id=<?php echo $data['id']?>" class="btn btn-outline-success float-end">View More</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>

