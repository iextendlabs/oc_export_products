<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <h1><?php echo $text_export_product; ?></h1>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning): ?>
    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php endif; ?>
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $select_product; ?></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 150px; overflow: auto;">
                <div class="checkbox">
                  <label>
                  <?php if ($export_products_product_id_status): ?>
                    <input type="checkbox" name="export_products_product_id_status"  checked="checked" />
                     <?php echo $text_product_id; ?>
                  <?php else: ?>
                    <input type="checkbox" name="export_products_product_id_status"  />
                     <?php echo $text_product_id; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_product_name_status): ?>
                    <input type="checkbox" name="export_products_product_name_status"  checked="checked" />
                     <?php echo $text_product_name; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_product_name_status"  />
                     <?php echo $text_product_name; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_image_path_status): ?>
                    <input type="checkbox" name="export_products_image_path_status"  checked="checked" />
                     <?php echo $text_image_path; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_image_path_status"  />
                     <?php echo $text_image_path; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_image_url_status): ?>
                    <input type="checkbox" name="export_products_image_url_status"  checked="checked" />
                     <?php echo $text_image_url; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_image_url_status"  />
                     <?php echo $text_image_url; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_description_status): ?>
                    <input type="checkbox" name="export_products_description_status"  checked="checked" />
                     <?php echo $text_description; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_description_status"  />
                     <?php echo $text_description; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_model_status): ?>
                    <input type="checkbox" name="export_products_model_status"  checked="checked" />
                     <?php echo $text_model; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_model_status"  />
                     <?php echo $text_model; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_quantity_status): ?>
                    <input type="checkbox" name="export_products_quantity_status"  checked="checked" />
                     <?php echo $text_quantity; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_quantity_status"  />
                     <?php echo $text_quantity; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_price_status): ?>
                    <input type="checkbox" name="export_products_price_status"  checked="checked" />
                     <?php echo $text_price; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_price_status"  />
                     <?php echo $text_price; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_stock_status_id_status): ?>
                    <input type="checkbox" name="export_products_stock_status_id_status"  checked="checked" />
                     <?php echo $text_stock_status_id; ?> 
                  <?php else: ?>
                    <input type="checkbox" name="export_products_stock_status_id_status"  />
                     <?php echo $text_stock_status_id; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_stock_status_status): ?>
                     <input type="checkbox" name="export_products_stock_status_status"  checked="checked" />
                      <?php echo $text_stock_status; ?>
                  <?php else: ?>
                     <input type="checkbox" name="export_products_stock_status_status"  />
                      <?php echo $text_stock_status; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_manufacturer_id_status): ?>
                     <input type="checkbox" name="export_products_manufacturer_id_status"  checked="checked" />
                      <?php echo $text_manufacturer_id; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_manufacturer_id_status"  />
                      <?php echo $text_manufacturer_id; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_manufaturer_name_status): ?>
                     <input type="checkbox" name="export_products_manufaturer_name_status"  checked="checked" />
                      <?php echo $text_manufaturer_name; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_manufaturer_name_status"  />
                      <?php echo $text_manufaturer_name; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_related_product_status): ?>
                     <input type="checkbox" name="export_products_related_product_status"  checked="checked" />
                      <?php echo $text_related_product; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_related_product_status"  />
                      <?php echo $text_related_product; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_product_status_status): ?>
                     <input type="checkbox" name="export_products_product_status_status"  checked="checked" />
                      <?php echo $text_product_status; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_product_status_status"  />
                      <?php echo $text_product_status; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_viewed_status): ?>
                     <input type="checkbox" name="export_products_viewed_status"  checked="checked" />
                      <?php echo $text_viewed; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_viewed_status"  />
                      <?php echo $text_viewed; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_category_status): ?>
                     <input type="checkbox" name="export_products_category_status"  checked="checked" />
                      <?php echo $text_category; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_category_status"  />
                      <?php echo $text_category; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_tax_class_id_status): ?>
                     <input type="checkbox" name="export_products_tax_class_id_status"  checked="checked" />
                      <?php echo $text_tax_class_id; ?> 
                  <?php else: ?>
                     <input type="checkbox" name="export_products_tax_class_id_status"  />
                      <?php echo $text_tax_class_id; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_tax_class_status): ?>
                      <input type="checkbox" name="export_products_tax_class_status"  checked="checked" />
                       <?php echo $text_tax_class; ?>
                  <?php else: ?>
                      <input type="checkbox" name="export_products_tax_class_status"  />
                       <?php echo $text_tax_class; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_sku_status): ?>
                      <input type="checkbox" name="export_products_sku_status"  checked="checked" />
                       <?php echo $text_sku; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_sku_status"  />
                       <?php echo $text_sku; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_upc_status): ?>
                      <input type="checkbox" name="export_products_upc_status"  checked="checked" />
                       <?php echo $text_upc; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_upc_status"  />
                       <?php echo $text_upc; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_ean_status): ?>
                      <input type="checkbox" name="export_products_ean_status"  checked="checked" />
                       <?php echo $text_ean; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_ean_status"  />
                       <?php echo $text_ean; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_jan_status): ?>
                      <input type="checkbox" name="export_products_jan_status"  checked="checked" />
                       <?php echo $text_jan; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_jan_status"  />
                       <?php echo $text_jan; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_isbn_status): ?>
                      <input type="checkbox" name="export_products_isbn_status"  checked="checked" />
                       <?php echo $text_isbn; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_isbn_status"  />
                       <?php echo $text_isbn; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_mpn_status): ?>
                      <input type="checkbox" name="export_products_mpn_status"  checked="checked" />
                       <?php echo $text_mpn; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_mpn_status"  />
                       <?php echo $text_mpn; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_location_status): ?>
                      <input type="checkbox" name="export_products_location_status"  checked="checked" />
                       <?php echo $text_location; ?> 
                  <?php else: ?>
                      <input type="checkbox" name="export_products_location_status"  />
                       <?php echo $text_location; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_shipping_status): ?>
                       <input type="checkbox" name="export_products_shipping_status"  checked="checked" />
                        <?php echo $text_shipping; ?>
                  <?php else: ?>
                       <input type="checkbox" name="export_products_shipping_status"  />
                        <?php echo $text_shipping; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_points_status): ?>
                       <input type="checkbox" name="export_products_points_status"  checked="checked" />
                        <?php echo $text_points; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_points_status"  />
                        <?php echo $text_points; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_weight_status): ?>
                       <input type="checkbox" name="export_products_weight_status"  checked="checked" />
                        <?php echo $text_weight; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_weight_status"  />
                        <?php echo $text_weight; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_weight_class_id_status): ?>
                       <input type="checkbox" name="export_products_weight_class_id_status"  checked="checked" />
                        <?php echo $text_weight_class_id; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_weight_class_id_status"  />
                        <?php echo $text_weight_class_id; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_weight_class_status): ?>
                       <input type="checkbox" name="export_products_weight_class_status"  checked="checked" />
                        <?php echo $text_weight_class; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_weight_class_status"  />
                        <?php echo $text_weight_class; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_length_status): ?>
                       <input type="checkbox" name="export_products_length_status"  checked="checked" />
                        <?php echo $text_length; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_length_status"  />
                        <?php echo $text_length; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_width_status): ?>
                       <input type="checkbox" name="export_products_width_status"  checked="checked" />
                        <?php echo $text_width; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_width_status"  />
                        <?php echo $text_width; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_height_status): ?>
                       <input type="checkbox" name="export_products_height_status"  checked="checked" />
                        <?php echo $text_height; ?> 
                  <?php else: ?>
                       <input type="checkbox" name="export_products_height_status"  />
                        <?php echo $text_height; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_length_class_id_status): ?>
                        <input type="checkbox" name="export_products_length_class_id_status"  checked="checked" />
                         <?php echo $text_length_class_id; ?>
                  <?php else: ?>
                        <input type="checkbox" name="export_products_length_class_id_status"  />
                         <?php echo $text_length_class_id; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_length_class_status): ?>
                        <input type="checkbox" name="export_products_length_class_status"  checked="checked" />
                         <?php echo $text_length_class; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_length_class_status"  />
                         <?php echo $text_length_class; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_subtract_status): ?>
                        <input type="checkbox" name="export_products_subtract_status"  checked="checked" />
                         <?php echo $text_subtract; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_subtract_status"  />
                         <?php echo $text_subtract; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_minimum_status): ?>
                        <input type="checkbox" name="export_products_minimum_status"  checked="checked" />
                         <?php echo $text_minimum; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_minimum_status"  />
                         <?php echo $text_minimum; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_sort_order_status): ?>
                        <input type="checkbox" name="export_products_sort_order_status"  checked="checked" />
                         <?php echo $text_sort_order; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_sort_order_status"  />
                         <?php echo $text_sort_order; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_tag_status): ?>
                        <input type="checkbox" name="export_products_tag_status"  checked="checked" />
                         <?php echo $text_tag; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_tag_status"  />
                         <?php echo $text_tag; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_meta_title_status): ?>
                        <input type="checkbox" name="export_products_meta_title_status"  checked="checked" />
                         <?php echo $text_meta_title; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_meta_title_status"  />
                         <?php echo $text_meta_title; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_meta_description_status): ?>
                        <input type="checkbox" name="export_products_meta_description_status"  checked="checked" />
                         <?php echo $text_meta_description; ?> 
                  <?php else: ?>
                        <input type="checkbox" name="export_products_meta_description_status"  />
                         <?php echo $text_meta_description; ?> 
                         <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_meta_keyword_status): ?>
                         <input type="checkbox" name="export_products_meta_keyword_status"  checked="checked" />
                          <?php echo $text_meta_keyword; ?>
                  <?php else: ?>
                         <input type="checkbox" name="export_products_meta_keyword_status"  />
                          <?php echo $text_meta_keyword; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_date_added_status): ?>
                         <input type="checkbox" name="export_products_date_added_status"  checked="checked" />
                          <?php echo $text_date_added; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_date_added_status"  />
                          <?php echo $text_date_added; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_date_modified_status): ?>
                         <input type="checkbox" name="export_products_date_modified_status"  checked="checked" />
                          <?php echo $text_date_modified; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_date_modified_status"  />
                          <?php echo $text_date_modified; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_date_available_status): ?>
                         <input type="checkbox" name="export_products_date_available_status"  checked="checked" />
                          <?php echo $text_date_available; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_date_available_status"  />
                          <?php echo $text_date_available; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_attribute_id_status): ?>
                         <input type="checkbox" name="export_products_attribute_id_status"  checked="checked" />
                          <?php echo $text_attribute_id; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_attribute_id_status"  />
                          <?php echo $text_attribute_id; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_attribute_name_status): ?>
                         <input type="checkbox" name="export_products_attribute_name_status"  checked="checked" />
                          <?php echo $text_attribute_name; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_attribute_name_status"  />
                          <?php echo $text_attribute_name; ?> 
                  <?php endif; ?>
                  </label><br>
                  <label>
                  <?php if ($export_products_attribute_value_status): ?>
                         <input type="checkbox" name="export_products_attribute_value_status"  checked="checked" />
                          <?php echo $text_attribute_value; ?> 
                  <?php else: ?>
                         <input type="checkbox" name="export_products_attribute_value_status"  />
                          <?php echo $text_attribute_value; ?> 
                  <?php endif; ?>
                  </label>
                </div>
              </div>
              <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link select-all"><?php echo $text_select_all; ?></button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link unselect-all"><?php echo $text_unselect_all; ?></button></div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-row-start"><?php echo $entry_start; ?></label>
              <div class="col-sm-3">
                <input type="number" name="export_products_row_start" placeholder="<?php echo $entry_start; ?>" value="<?php echo $export_products_row_start; ?>" id="input-row-start" class="form-control"/>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-row-end"><?php echo $entry_end; ?></label>
              <div class="col-sm-3">
                <input type="number" name="export_products_row_end" placeholder="<?php echo $entry_end; ?>" value="<?php echo $export_products_row_end; ?>" id="input-row-end" class="form-control"/>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $text_export_product; ?></label>
            <div class="col-sm-10">
              <a href="<?php echo $href_exportProductData; ?>" data-toggle="tooltip" title="<?php echo $text_export_product; ?>" class="btn btn-success"><?php echo $text_export_product; ?></a>
            </div>
          </div><hr>
          <h3><?php echo $text_exportProductImage; ?></h3>
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo $select_product_images; ?></label>
            <div class="col-sm-10">
              <div class="well well-sm" style="height: 150px; overflow: auto;">
                <div class="checkbox">
                  <label>
                  <?php if ($export_products_image_product_id_status): ?>
                    <input type="checkbox" name="export_products_image_product_id_status"  checked="checked" />
                     <?php echo $text_product_id; ?>
                  <?php else: ?>
                    <input type="checkbox" name="export_products_image_product_id_status"  />
                     <?php echo $text_product_id; ?>
                  <?php endif; ?>
                  </label><br>
                  <label>
                     <?php echo $text_additional_image; ?> 
                  </label><br>
                  <label>
                  <?php if ($export_products_additional_images_status): ?>
                    <input type="radio" name="export_products_additional_images_status" value="1" checked="checked" />
                     <?php echo $text_additional_image_path; ?> <br>
                     <input type="radio" name="export_products_additional_images_status" value="0"/>
                     <?php echo $text_additional_image_url; ?> 
                  <?php else: ?>
                    <input type="radio" name="export_products_additional_images_status" value="1"/>
                     <?php echo $text_additional_image_path; ?> <br>
                     <input type="radio" name="export_products_additional_images_status" value="0" checked="checked">
                     <?php echo $text_additional_image_url; ?>  
                  <?php endif; ?>
                  </label>
                </div>
              </div>
              <button type="button"  onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link select-all"><?php echo $text_select_all; ?></button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link unselect-all"><?php echo $text_unselect_all; ?></button></div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-additional-row-start"><?php echo $entry_start; ?></label>
              <div class="col-sm-3">
                <input type="number" name="export_products_additional_images_row_start" placeholder="<?php echo $entry_start; ?>" value="<?php echo $export_products_additional_images_row_start; ?>" id="input-additional-row-start" class="form-control"/>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-additional-row-end"><?php echo $entry_end; ?></label>
              <div class="col-sm-3">
                <input type="number" name="export_products_additional_images_row_end" placeholder="<?php echo $entry_end; ?>" value="<?php echo $export_products_additional_images_row_end; ?>" id="input-additional-row-end" class="form-control"/>
              </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo $text_exportProductImage; ?></label>
            <div class="col-sm-10">
              <a href="<?php echo $href_exportProductImage; ?>" data-toggle="tooltip" title="<?php echo $text_exportProductImage; ?>" class="btn btn-success"><?php echo $text_exportProductImage; ?></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
  $('#form-module').on('change','input',function(){
    $.ajax({
      url:'index.php?route=extension/module/export_products/productExport&token=<?php echo $token; ?>',
      type:'post',
      data:$('#form-module').serialize(),
    })
  })
  $('#form-module').on('input',function(){
    $.ajax({
      url:'index.php?route=extension/module/export_products/productExport&token=<?php echo $token; ?>',
      type:'post',
      data:$('#form-module').serialize(),
    })
  })
  //--></script>

<script type="text/javascript"><!--
  $('.select-all, .unselect-all').on('click',function(){
    $.ajax({
      url:'index.php?route=extension/module/export_products/productExport&token=<?php echo $token; ?>',
      type:'post',
      data:$('#form-module').serialize(),
    })
  })
  //--></script>
<?php echo $footer; ?>