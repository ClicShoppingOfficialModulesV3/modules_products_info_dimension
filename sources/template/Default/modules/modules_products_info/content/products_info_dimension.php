<?php
  use ClicShopping\OM\CLICSHOPPING;
?>
<div class="<?php echo $text_position; ?> col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
  <div style="float: <?php echo MODULE_PRODUCTS_INFO_DIMENSION_POSITION; ?>;">
    <div class="modulesProductsInfoDimension">
      <span class="modulesProductsInfoDimension"><h3><?php echo CLICSHOPPING::getDef('text_products_dimension') . ' ' . $products_dimension; ?></h3></span>
    </div>
  </div>
</div>