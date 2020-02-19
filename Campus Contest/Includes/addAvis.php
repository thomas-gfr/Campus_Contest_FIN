<?php

require('Includes/functions.php');

$query = avis();

foreach($query as $avi)
{
    ?>
    <div class="carousel-item" style="height: 100%;background-color: #d6d6d8;">
        <div style="width: 80%; height: 100%;background-color: #d6d6d8; margin:0 auto;">
            <div class="slide-box-img">
                <img class="slide-img" src="Image/avatar.jpg">
                <div class="slide-txt-user">
                    <span style="margin-left: -80px; display: block;"> <?= $avi['prenom']?>
                        <br>
                        <i>
                            <span>
                             <?= $avis['entreprise'] ?>
                            </span>
                        </i>
                    </span>
                </div>
            </div>
            <div class="slide-contents">
              <?= $avi['message'] ?>
            </div>
        </div>
    </div>

    <?php
}


?>