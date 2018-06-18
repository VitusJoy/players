<?php


use yii\helpers\Html;





/* @var $this yii\web\View */
/* @var $content string */


$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php
    if ($ustatus ==0) { ?>
    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Please select your player.</p>
    </div>

    <div class="body-content">
<div id="myGroup">
    

            <div class="row">
            <div class="col-lg-4">
                <p>
                    <a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" data-parent="#myGroup">
                        Category 1
                    </a>
                </p>
           </div>


              <div class="col-lg-4">
                <p>
                    <a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" data-parent="#myGroup">
                        Category 2
                    </a>
                </p>
            </div>

              <div class="col-lg-4">
                <p>
                    <a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" data-parent="#myGroup">
                        Category 3
                    </a>
                </p>
                
            </div>
            
        </div>




    <div class="container">
        <div class="row">
            <div class="collapse"  id="collapseExample1">

            <?php foreach ($cat1_p as $key) { 
                ?>
                <div class="col-lg-4"> 
                    <h3><?php echo $key['p_name'];  ?> </h3>
                    <?php
                        echo Html::a('Choose Him',['player/status', 'pid' => $key['id']],['class'=>'btn btn-success']);
                    ?> 
                </div>
                
            <?php } ?>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="collapse indent" id="collapseExample2">
                <?php foreach ($cat2_p as $key) { ?>
                    <div class="col-lg-4"> <h3> <?php echo $key['p_name'];  ?> </h3> 
                        <?php
                            echo Html::a('Choose Him',['player/status', 'pid' => $key['id']],['class'=>'btn btn-success']);
                        ?> 
                    </div>
                
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="collapse indent" id="collapseExample3">
                <?php foreach ($cat3_p as $key) { ?>
                    <div class="col-lg-4"> <h3> <?php echo $key['p_name'];  ?> </h3>
                        <?php
                            echo Html::a('Choose Him',['player/status', 'pid' => $key['id']],['class'=>'btn btn-success']);
                        ?> 
                    </div>
                
                <?php } ?>
            </div>
        </div>
    </div>
    </div>

        
    <?php }else{ ?>
    

        <div align="center">
            <h1>Thank you for Selecting the Player</h1>
        </div>

       <?php } ?>
        



        </div>




