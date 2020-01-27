<?php 
    
    include  "template/menu.php"; ?>

    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <h3 class="margin">Nos produits</h3>
        <br>
        <div class="row col-md-6 col-md-offset-3">
            <div class="col-sm-4">
                <img src="<?= img;?>birds1.jpg" class="img-responsive margin" style="width:100%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>birds2.jpg" class="img-responsive margin" style="width:100%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
            <div class="col-sm-4">
                <img src="<?= img; ?>birds3.jpg" class="img-responsive margin" style="width:100%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.</p>
            </div>
        </div>
    </div>

    <?php include  "template/footer.php"; ?>