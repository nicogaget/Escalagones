<?php
foreach ( $result as $elements){
?>



<div class="row-fluid ">
    <div class="col-sm-4 ">
        <div class="card-columns-fluid">

            <div class="card  bg-light" style = "width: 22rem; " >

                <img class="card-img-top"  src=" <?php echo $elements->pictures->picture[2]->filename  ; ?> " alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title"><b><?php echo $elements->advert_heading ?></b></h5>
                    <p class="card-text"><b><?php echo $elements->price_text ?></b></p>
                    <p class="card-text"><?php echo $elements->bullet1 ?></p>
                    <p class="card-text"><?php echo $elements->bullet2 ?></p>
                    <a href="#" class="btn btn-secondary">Full Details</a>

                </div></div></div></div>

    <?php

    }
    ?>

</div> <!--container div  -->
</div>