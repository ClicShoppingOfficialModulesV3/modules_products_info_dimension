<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *  @Info : https://www.clicshopping.org/forum/trademark/
 *
 */

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