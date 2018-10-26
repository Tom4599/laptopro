<div id="product">
    <?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/laptopro/src/controller/laptopcontroller.php");
    require_once($_SERVER["DOCUMENT_ROOT"] ."/laptopro/src/model/laptopmodel.php");
    $cards=getlaptopcard(null,null,null,null,null,null);
    echo $cards;
    ?>

</div>
