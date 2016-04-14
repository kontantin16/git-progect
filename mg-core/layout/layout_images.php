<?php mgAddMeta('<link type="text/css" href="'.SCRIPT.'standard/css/jquery.fancybox.css" rel="stylesheet"/>'); ?>
<?php mgAddMeta('<link type="text/css" href="'.SCRIPT.'standard/css/layout.images.css" rel="stylesheet"/>'); ?>
<?php mgAddMeta('<script type="text/javascript" src="'.SCRIPT.'jquery.fancybox.pack.js"></script>'); ?>
<?php mgAddMeta('<script type="text/javascript" src="'.SCRIPT.'jquery.bxslider.min.js"></script>'); ?>
<?php mgAddMeta('<script type="text/javascript" src="'.SCRIPT.'standard/js/layout.images.js"></script>'); ?>
<!--
<div class="mg-product-slides"> 
    <ul class="main-product-slide">
        <?php         
        foreach ($data["images_product"] as $key=>$image){?>
            <li class="product-details-image"><a href="<?php echo $image ? SITE.'/uploads/'.$image: SITE."/uploads/no-img.jpg" ?>" rel="gallery" class="fancy-modal">
            <?php
            $item["image_url"] = $image;
            $item["id"] = $data["id"];
            $item["title"] = $data["title"];
            $item["image_alt"] = $data["images_alt"][$key];
            $item["image_title"] = $data["images_title"][$key];
            echo mgImageProduct($item);
            ?></a>
            <a class="zoom" href="javascript:void(0);"></a>
            </li>
        <?php }?>
    </ul>
</div>
-->
<!--dlyaa testov-->


<div class="mg-product-slides"> 
    <ul class="main-product-slide">
        <?php         
        foreach ($data["images_product"] as $key=>$image){?>
            <li class="product-details-image"><a href="<?php echo $image ? SITE.'/uploads/'.$image: SITE."/uploads/no-img.jpg" ?>" rel="gallery" class="fancy-modal">
            <?php
            $item["image_url"] = $image;
            $item["id"] = $data["id"];
            $item["title"] = $data["title"];
            $item["image_alt"] = $data["images_alt"][$key];
            $item["image_title"] = $data["images_title"][$key];
            echo mgImageProduct($item);
            ?></a>
            <a class="zoom" href="javascript:void(0);"></a>
            </li>
        <?php }?>
    </ul>
    <div class="slides-slider">
<div class="bx-wrapper" style="max-width: 245px; margin: 0px auto;">
<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 72px;">
<div class="slides-inner" style="width: 515%; position: relative; left: -255px;">

         <?php     
          $i=0;  
        foreach ($data["images_product"] as $key=>$image){
        	?>
         <a class="slides-item bx-clone" href="javascript:void(0);" data-slide-index="<?php echo $i; ?>" style="float: left; list-style: outside none none; position: relative; width: 73px; margin-right: 10px;">
    
         <?php
            $item["image_url"] = $image;
            $item["id"] = $data["id"];
            $item["title"] = $data["title"];
            $item["image_alt"] = $data["images_alt"][$key];
            $item["image_title"] = $data["images_title"][$key];
            echo mgImageProduct($item);
            ?>
            </a>
         <? 
         $i++;;
         }?>   
   
</div>
</div>
<!--
<div class="bx-controls bx-has-controls-direction">
<div class="bx-controls-direction">
<a class="bx-prev disabled" href="">Prev</a>
<a class="bx-next disabled" href="">Next</a>
</div>
</div>

-->
</div>
</div>


</div>

