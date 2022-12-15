<?php
class ControllerExtensionModuleExportProducts extends Controller {
	private $error = array();

	public function index() {

		$this->load->language('extension/module/export_products');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('export_products', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_export_product'] = $this->language->get('text_export_product');
		$data['text_exportProductImage'] = $this->language->get('text_exportProductImage');
		$data['text_extension'] = $this->language->get('text_extension');
		$data['text_product_id'] = $this->language->get('text_product_id');
		$data['text_product_name']       = $this->language->get('text_product_name');
		$data['text_image_path']       = $this->language->get('text_image_path');
		$data['text_image_url']       = $this->language->get('text_image_url');
		$data['text_description']       = $this->language->get('text_description');
		$data['text_model']       = $this->language->get('text_model');
		$data['text_quantity']       = $this->language->get('text_quantity');
		$data['text_price']       = $this->language->get('text_price');
		$data['text_stock_status_id']       = $this->language->get('text_stock_status_id');
		$data['text_stock_status']       = $this->language->get('text_stock_status');
		$data['text_manufacturer_id']       = $this->language->get('text_manufacturer_id');
		$data['text_manufaturer_name']       = $this->language->get('text_manufaturer_name');
		$data['text_related_product']       = $this->language->get('text_related_product');
		$data['text_product_status']       = $this->language->get('text_product_status');
		$data['text_viewed']       = $this->language->get('text_viewed');
		$data['text_category']       = $this->language->get('text_category');
		$data['text_tax_class_id']       = $this->language->get('text_tax_class_id');
		$data['text_tax_class']       = $this->language->get('text_tax_class');
		$data['text_sku']       = $this->language->get('text_sku');
		$data['text_upc']       = $this->language->get('text_upc');
		$data['text_ean']       = $this->language->get('text_ean');
		$data['text_jan']       = $this->language->get('text_jan');
		$data['text_isbn']       = $this->language->get('text_isbn');
		$data['text_mpn']       = $this->language->get('text_mpn');
		$data['text_location']       = $this->language->get('text_location');
		$data['text_shipping']       = $this->language->get('text_shipping');
		$data['text_points']       = $this->language->get('text_points');
		$data['text_weight']       = $this->language->get('text_weight');
		$data['text_weight_class_id']       = $this->language->get('text_weight_class_id');
		$data['text_weight_class']       = $this->language->get('text_weight_class');
		$data['text_length']       = $this->language->get('text_length');
		$data['text_width']       = $this->language->get('text_width');
		$data['text_height']       = $this->language->get('text_height');
		$data['text_length_class_id']       = $this->language->get('text_length_class_id');
		$data['text_length_class']       = $this->language->get('text_length_class');
		$data['text_subtract']       = $this->language->get('text_subtract');
		$data['text_minimum']       = $this->language->get('text_minimum');
		$data['text_sort_order']       = $this->language->get('text_sort_order');
		$data['text_tag']       = $this->language->get('text_tag');
		$data['text_meta_title']       = $this->language->get('text_meta_title');
		$data['text_meta_description']       = $this->language->get('text_meta_description');
		$data['text_meta_keyword']       = $this->language->get('text_meta_keyword');
		$data['text_date_added']       = $this->language->get('text_date_added');
		$data['text_date_modified']       = $this->language->get('text_date_modified');
		$data['text_date_available']       = $this->language->get('text_date_available');
		$data['text_attribute_id']       = $this->language->get('text_attribute_id');
		$data['text_attribute_name']       = $this->language->get('text_attribute_name');
		$data['text_attribute_value']       = $this->language->get('text_attribute_value');
		$data['text_additional_image_path']       = $this->language->get('text_additional_image_path');
		$data['text_additional_image_url']       = $this->language->get('text_additional_image_url');
		$data['text_additional_image']       = $this->language->get('text_additional_image');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['entry_status']       = $this->language->get('entry_status');
		$data['entry_start']       = $this->language->get('entry_start');
		$data['entry_end']       = $this->language->get('entry_end');
		$data['select_product_images']       = $this->language->get('select_product_images');
		$data['select_product']       = $this->language->get('select_product');

		$data['error_permission']       = $this->language->get('error_permission');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/export_products', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/export_products', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		if (isset($this->request->post['export_products_status'])) {
			$data['export_products_status'] = $this->request->post['export_products_status'];
		} else {
			$data['export_products_status'] = $this->config->get('export_products_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/export', $data));
	}

	public function productExport() {
		
		$this->load->language('extension/module/export_products');

		$this->document->setTitle($this->language->get('text_export_product'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('export_products', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_export_product'] = $this->language->get('text_export_product');
		$data['text_exportProductImage'] = $this->language->get('text_exportProductImage');
		$data['text_extension'] = $this->language->get('text_extension');
		$data['text_product_id'] = $this->language->get('text_product_id');
		$data['text_product_name']       = $this->language->get('text_product_name');
		$data['text_image_path']       = $this->language->get('text_image_path');
		$data['text_image_url']       = $this->language->get('text_image_url');
		$data['text_description']       = $this->language->get('text_description');
		$data['text_model']       = $this->language->get('text_model');
		$data['text_quantity']       = $this->language->get('text_quantity');
		$data['text_price']       = $this->language->get('text_price');
		$data['text_stock_status_id']       = $this->language->get('text_stock_status_id');
		$data['text_stock_status']       = $this->language->get('text_stock_status');
		$data['text_manufacturer_id']       = $this->language->get('text_manufacturer_id');
		$data['text_manufaturer_name']       = $this->language->get('text_manufaturer_name');
		$data['text_related_product']       = $this->language->get('text_related_product');
		$data['text_product_status']       = $this->language->get('text_product_status');
		$data['text_viewed']       = $this->language->get('text_viewed');
		$data['text_category']       = $this->language->get('text_category');
		$data['text_tax_class_id']       = $this->language->get('text_tax_class_id');
		$data['text_tax_class']       = $this->language->get('text_tax_class');
		$data['text_sku']       = $this->language->get('text_sku');
		$data['text_upc']       = $this->language->get('text_upc');
		$data['text_ean']       = $this->language->get('text_ean');
		$data['text_jan']       = $this->language->get('text_jan');
		$data['text_isbn']       = $this->language->get('text_isbn');
		$data['text_mpn']       = $this->language->get('text_mpn');
		$data['text_location']       = $this->language->get('text_location');
		$data['text_shipping']       = $this->language->get('text_shipping');
		$data['text_points']       = $this->language->get('text_points');
		$data['text_weight']       = $this->language->get('text_weight');
		$data['text_weight_class_id']       = $this->language->get('text_weight_class_id');
		$data['text_weight_class']       = $this->language->get('text_weight_class');
		$data['text_length']       = $this->language->get('text_length');
		$data['text_width']       = $this->language->get('text_width');
		$data['text_height']       = $this->language->get('text_height');
		$data['text_length_class_id']       = $this->language->get('text_length_class_id');
		$data['text_length_class']       = $this->language->get('text_length_class');
		$data['text_subtract']       = $this->language->get('text_subtract');
		$data['text_minimum']       = $this->language->get('text_minimum');
		$data['text_sort_order']       = $this->language->get('text_sort_order');
		$data['text_tag']       = $this->language->get('text_tag');
		$data['text_meta_title']       = $this->language->get('text_meta_title');
		$data['text_meta_description']       = $this->language->get('text_meta_description');
		$data['text_meta_keyword']       = $this->language->get('text_meta_keyword');
		$data['text_date_added']       = $this->language->get('text_date_added');
		$data['text_date_modified']       = $this->language->get('text_date_modified');
		$data['text_date_available']       = $this->language->get('text_date_available');
		$data['text_attribute_id']       = $this->language->get('text_attribute_id');
		$data['text_attribute_name']       = $this->language->get('text_attribute_name');
		$data['text_attribute_value']       = $this->language->get('text_attribute_value');
		$data['text_additional_image_path']       = $this->language->get('text_additional_image_path');
		$data['text_additional_image_url']       = $this->language->get('text_additional_image_url');
		$data['text_additional_image']       = $this->language->get('text_additional_image');
		$data['text_select_all']       = $this->language->get('text_select_all');
		$data['text_unselect_all']       = $this->language->get('text_unselect_all');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		
		$data['entry_status']       = $this->language->get('entry_status');
		$data['entry_start']       = $this->language->get('entry_start');
		$data['entry_end']       = $this->language->get('entry_end');
		$data['select_product_images']       = $this->language->get('select_product_images');
		$data['select_product']       = $this->language->get('select_product');

		$data['error_permission']       = $this->language->get('error_permission');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('extension/module/export_products', 'token=' . $this->session->data['token'], true);

        if (isset($this->request->post['export_products_product_id_status'])) {
			$data['export_products_product_id_status'] = $this->request->post['export_products_product_id_status'];
		} else {
			$data['export_products_product_id_status'] = $this->config->get('export_products_product_id_status');
		}

		if (isset($this->request->post['export_products_row_start'])) {
			$data['export_products_row_start'] = $this->request->post['export_products_row_start'];
		} else {
			$data['export_products_row_start'] = $this->config->get('export_products_row_start');
		}

		if (isset($this->request->post['export_products_row_end'])) {
			$data['export_products_row_end'] = $this->request->post['export_products_row_end'];
		} else {
			$data['export_products_row_end'] = $this->config->get('export_products_row_end');
		}

		if (isset($this->request->post['export_products_additional_images_row_start'])) {
			$data['export_products_additional_images_row_start'] = $this->request->post['export_products_additional_images_row_start'];
		} else {
			$data['export_products_additional_images_row_start'] = $this->config->get('export_products_additional_images_row_start');
		}

		if (isset($this->request->post['export_products_additional_images_row_end'])) {
			$data['export_products_additional_images_row_end'] = $this->request->post['export_products_additional_images_row_end'];
		} else {
			$data['export_products_additional_images_row_end'] = $this->config->get('export_products_additional_images_row_end');
		}

		if (isset($this->request->post['export_products_product_name_status'])) {
			$data['export_products_product_name_status'] = $this->request->post['export_products_product_name_status'];
		} else {
			$data['export_products_product_name_status'] = $this->config->get('export_products_product_name_status');
		}

		if (isset($this->request->post['export_products_image_path_status'])) {
			$data['export_products_image_path_status'] = $this->request->post['export_products_image_path_status'];
		} else {
			$data['export_products_image_path_status'] = $this->config->get('export_products_image_path_status');
		}

		if (isset($this->request->post['export_products_image_url_status'])) {
			$data['export_products_image_url_status'] = $this->request->post['export_products_image_url_status'];
		} else {
			$data['export_products_image_url_status'] = $this->config->get('export_products_image_url_status');
		}

		if (isset($this->request->post['export_products_description_status'])) {
			$data['export_products_description_status'] = $this->request->post['export_products_description_status'];
		} else {
			$data['export_products_description_status'] = $this->config->get('export_products_description_status');
		}

		if (isset($this->request->post['export_products_model_status'])) {
			$data['export_products_model_status'] = $this->request->post['export_products_model_status'];
		} else {
			$data['export_products_model_status'] = $this->config->get('export_products_model_status');
		}

		if (isset($this->request->post['export_products_quantity_status'])) {
			$data['export_products_quantity_status'] = $this->request->post['export_products_quantity_status'];
		} else {
			$data['export_products_quantity_status'] = $this->config->get('export_products_quantity_status');
		}

		if (isset($this->request->post['export_products_price_status'])) {
			$data['export_products_price_status'] = $this->request->post['export_products_price_status'];
		} else {
			$data['export_products_price_status'] = $this->config->get('export_products_price_status');
		}

		if (isset($this->request->post['export_products_stock_status_id_status'])) {
			$data['export_products_stock_status_id_status'] = $this->request->post['export_products_stock_status_id_status'];
		} else {
			$data['export_products_stock_status_id_status'] = $this->config->get('export_products_stock_status_id_status');
		}

		if (isset($this->request->post['export_products_stock_status_status'])) {
			$data['export_products_stock_status_status'] = $this->request->post['export_products_stock_status_status'];
		} else {
			$data['export_products_stock_status_status'] = $this->config->get('export_products_stock_status_status');
		}

		if (isset($this->request->post['export_products_manufacturer_id_status'])) {
			$data['export_products_manufacturer_id_status'] = $this->request->post['export_products_manufacturer_id_status'];
		} else {
			$data['export_products_manufacturer_id_status'] = $this->config->get('export_products_manufacturer_id_status');
		}

		if (isset($this->request->post['export_products_manufaturer_name_status'])) {
			$data['export_products_manufaturer_name_status'] = $this->request->post['export_products_manufaturer_name_status'];
		} else {
			$data['export_products_manufaturer_name_status'] = $this->config->get('export_products_manufaturer_name_status');
		}

		if (isset($this->request->post['export_products_related_product_status'])) {
			$data['export_products_related_product_status'] = $this->request->post['export_products_related_product_status'];
		} else {
			$data['export_products_related_product_status'] = $this->config->get('export_products_related_product_status');
		}

		if (isset($this->request->post['export_products_product_status_status'])) {
			$data['export_products_product_status_status'] = $this->request->post['export_products_product_status_status'];
		} else {
			$data['export_products_product_status_status'] = $this->config->get('export_products_product_status_status');
		}

		if (isset($this->request->post['export_products_viewed_status'])) {
			$data['export_products_viewed_status'] = $this->request->post['export_products_viewed_status'];
		} else {
			$data['export_products_viewed_status'] = $this->config->get('export_products_viewed_status');
		}

		if (isset($this->request->post['export_products_category_status'])) {
			$data['export_products_category_status'] = $this->request->post['export_products_category_status'];
		} else {
			$data['export_products_category_status'] = $this->config->get('export_products_category_status');
		}

		if (isset($this->request->post['export_products_tax_class_id_status'])) {
			$data['export_products_tax_class_id_status'] = $this->request->post['export_products_tax_class_id_status'];
		} else {
			$data['export_products_tax_class_id_status'] = $this->config->get('export_products_tax_class_id_status');
		}

		if (isset($this->request->post['export_products_tax_class_status'])) {
			$data['export_products_tax_class_status'] = $this->request->post['export_products_tax_class_status'];
		} else {
			$data['export_products_tax_class_status'] = $this->config->get('export_products_tax_class_status');
		}

		if (isset($this->request->post['export_products_sku_status'])) {
			$data['export_products_sku_status'] = $this->request->post['export_products_sku_status'];
		} else {
			$data['export_products_sku_status'] = $this->config->get('export_products_sku_status');
		}

		if (isset($this->request->post['export_products_upc_status'])) {
			$data['export_products_upc_status'] = $this->request->post['export_products_upc_status'];
		} else {
			$data['export_products_upc_status'] = $this->config->get('export_products_upc_status');
		}

		if (isset($this->request->post['export_products_ean_status'])) {
			$data['export_products_ean_status'] = $this->request->post['export_products_ean_status'];
		} else {
			$data['export_products_ean_status'] = $this->config->get('export_products_ean_status');
		}

        if (isset($this->request->post['export_products_jan_status'])) {
			$data['export_products_jan_status'] = $this->request->post['export_products_jan_status'];
		} else {
			$data['export_products_jan_status'] = $this->config->get('export_products_jan_status');
		}

        if (isset($this->request->post['export_products_isbn_status'])) {
			$data['export_products_isbn_status'] = $this->request->post['export_products_isbn_status'];
		} else {
			$data['export_products_isbn_status'] = $this->config->get('export_products_isbn_status');
		}

        if (isset($this->request->post['export_products_mpn_status'])) {
			$data['export_products_mpn_status'] = $this->request->post['export_products_mpn_status'];
		} else {
			$data['export_products_mpn_status'] = $this->config->get('export_products_mpn_status');
		}

        if (isset($this->request->post['export_products_location_status'])) {
			$data['export_products_location_status'] = $this->request->post['export_products_location_status'];
		} else {
			$data['export_products_location_status'] = $this->config->get('export_products_location_status');
		}

        if (isset($this->request->post['export_products_shipping_status'])) {
			$data['export_products_shipping_status'] = $this->request->post['export_products_shipping_status'];
		} else {
			$data['export_products_shipping_status'] = $this->config->get('export_products_shipping_status');
		}

        if (isset($this->request->post['export_products_points_status'])) {
			$data['export_products_points_status'] = $this->request->post['export_products_points_status'];
		} else {
			$data['export_products_points_status'] = $this->config->get('export_products_points_status');
		}

        if (isset($this->request->post['export_products_weight_status'])) {
			$data['export_products_weight_status'] = $this->request->post['export_products_weight_status'];
		} else {
			$data['export_products_weight_status'] = $this->config->get('export_products_weight_status');
		}

        if (isset($this->request->post['export_products_weight_class_id_status'])) {
			$data['export_products_weight_class_id_status'] = $this->request->post['export_products_weight_class_id_status'];
		} else {
			$data['export_products_weight_class_id_status'] = $this->config->get('export_products_weight_class_id_status');
		}

        if (isset($this->request->post['export_products_weight_class_status'])) {
			$data['export_products_weight_class_status'] = $this->request->post['export_products_weight_class_status'];
		} else {
			$data['export_products_weight_class_status'] = $this->config->get('export_products_weight_class_status');
		}

        if (isset($this->request->post['export_products_length_status'])) {
			$data['export_products_length_status'] = $this->request->post['export_products_length_status'];
		} else {
			$data['export_products_length_status'] = $this->config->get('export_products_length_status');
		}

        if (isset($this->request->post['export_products_width_status'])) {
			$data['export_products_width_status'] = $this->request->post['export_products_width_status'];
		} else {
			$data['export_products_width_status'] = $this->config->get('export_products_width_status');
		}

        if (isset($this->request->post['export_products_height_status'])) {
			$data['export_products_height_status'] = $this->request->post['export_products_height_status'];
		} else {
			$data['export_products_height_status'] = $this->config->get('export_products_height_status');
		}

        if (isset($this->request->post['export_products_length_class_id_status'])) {
			$data['export_products_length_class_id_status'] = $this->request->post['export_products_length_class_id_status'];
		} else {
			$data['export_products_length_class_id_status'] = $this->config->get('export_products_length_class_id_status');
		}

        if (isset($this->request->post['export_products_length_class_status'])) {
			$data['export_products_length_class_status'] = $this->request->post['export_products_length_class_status'];
		} else {
			$data['export_products_length_class_status'] = $this->config->get('export_products_length_class_status');
		}

        if (isset($this->request->post['export_products_subtract_status'])) {
			$data['export_products_subtract_status'] = $this->request->post['export_products_subtract_status'];
		} else {
			$data['export_products_subtract_status'] = $this->config->get('export_products_subtract_status');
		}

        if (isset($this->request->post['export_products_minimum_status'])) {
			$data['export_products_minimum_status'] = $this->request->post['export_products_minimum_status'];
		} else {
			$data['export_products_minimum_status'] = $this->config->get('export_products_minimum_status');
		}

        if (isset($this->request->post['export_products_sort_order_status'])) {
			$data['export_products_sort_order_status'] = $this->request->post['export_products_sort_order_status'];
		} else {
			$data['export_products_sort_order_status'] = $this->config->get('export_products_sort_order_status');
		}

        if (isset($this->request->post['export_products_tag_status'])) {
			$data['export_products_tag_status'] = $this->request->post['export_products_tag_status'];
		} else {
			$data['export_products_tag_status'] = $this->config->get('export_products_tag_status');
		}

        if (isset($this->request->post['export_products_meta_title_status'])) {
			$data['export_products_meta_title_status'] = $this->request->post['export_products_meta_title_status'];
		} else {
			$data['export_products_meta_title_status'] = $this->config->get('export_products_meta_title_status');
		}

        if (isset($this->request->post['export_products_meta_description_status'])) {
			$data['export_products_meta_description_status'] = $this->request->post['export_products_meta_description_status'];
		} else {
			$data['export_products_meta_description_status'] = $this->config->get('export_products_meta_description_status');
		}

        if (isset($this->request->post['export_products_meta_keyword_status'])) {
			$data['export_products_meta_keyword_status'] = $this->request->post['export_products_meta_keyword_status'];
		} else {
			$data['export_products_meta_keyword_status'] = $this->config->get('export_products_meta_keyword_status');
		}

        if (isset($this->request->post['export_products_date_added_status'])) {
			$data['export_products_date_added_status'] = $this->request->post['export_products_date_added_status'];
		} else {
			$data['export_products_date_added_status'] = $this->config->get('export_products_date_added_status');
		}

        if (isset($this->request->post['export_products_date_modified_status'])) {
			$data['export_products_date_modified_status'] = $this->request->post['export_products_date_modified_status'];
		} else {
			$data['export_products_date_modified_status'] = $this->config->get('export_products_date_modified_status');
		}

        if (isset($this->request->post['export_products_date_available_status'])) {
			$data['export_products_date_available_status'] = $this->request->post['export_products_date_available_status'];
		} else {
			$data['export_products_date_available_status'] = $this->config->get('export_products_date_available_status');
		}

        if (isset($this->request->post['export_products_attribute_id_status'])) {
			$data['export_products_attribute_id_status'] = $this->request->post['export_products_attribute_id_status'];
		} else {
			$data['export_products_attribute_id_status'] = $this->config->get('export_products_attribute_id_status');
		}

        if (isset($this->request->post['export_products_attribute_name_status'])) {
			$data['export_products_attribute_name_status'] = $this->request->post['export_products_attribute_name_status'];
		} else {
			$data['export_products_attribute_name_status'] = $this->config->get('export_products_attribute_name_status');
		}

        if (isset($this->request->post['export_products_attribute_value_status'])) {
			$data['export_products_attribute_value_status'] = $this->request->post['export_products_attribute_value_status'];
		} else {
			$data['export_products_attribute_value_status'] = $this->config->get('export_products_attribute_value_status');
		}

		if (isset($this->request->post['export_products_image_product_id_status'])) {
			$data['export_products_image_product_id_status'] = $this->request->post['export_products_image_product_id_status'];
		} else {
			$data['export_products_image_product_id_status'] = $this->config->get('export_products_image_product_id_status');
		}

		if (isset($this->request->post['export_products_additional_images_status'])) {
			$data['export_products_additional_images_status'] = $this->request->post['export_products_additional_images_status'];
		} else {
			$data['export_products_additional_images_status'] = $this->config->get('export_products_additional_images_status');
		}

		$data['href_exportProductData'] = $this->url->link('extension/module/export_products/exportProductData', 'token=' . $this->session->data['token'], true);
		$data['href_exportProductImage'] = $this->url->link('extension/module/export_products/exportProductImage', 'token=' . $this->session->data['token'], true);

		$data['token'] = $this->session->data['token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/export_product', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/export_products')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function exportProductData(){

		$this->load->model('extension/export_products');
		
		$file_name = 'Product_Data.csv';
		header("Content-Description: File File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv");

		$file = fopen("php://output","w");

		$header = array();

		if ($this->config->get('export_products_product_id_status')) {
			$header[]= 'Product Id';
		}
		if ($this->config->get('export_products_product_name_status')) {
			$header[]= 'Name';
		}
		if ($this->config->get('export_products_image_path_status')) {
			$header[]= 'Image Path';
		}
		if ($this->config->get('export_products_image_url_status')) {
			$header[]= 'Image URL';
		}
		if ($this->config->get('export_products_description_status')) {
			$header[]= 'Description';
		}
		if ($this->config->get('export_products_model_status')) {
			$header[]= 'Model';
		}
		if ($this->config->get('export_products_quantity_status')) {
			$header[]= 'Quantity';
		}
		if ($this->config->get('export_products_price_status')) {
			$header[]= 'Price';
		}
		if ($this->config->get('export_products_stock_status_id_status')) {
			$header[]= 'Stock Status ID';
		}
		if ($this->config->get('export_products_stock_status_status')) {
			$header[]= 'Stock Status';
		}
		if ($this->config->get('export_products_manufacturer_id_status')) {
			$header[]= 'Manufacturer ID';
		}
		if ($this->config->get('export_products_manufaturer_name_status')) {
			$header[]= 'Manufacturer Name';
		}
		if ($this->config->get('export_products_related_product_status')) {
			$header[]= 'Related Product';
		}
		if ($this->config->get('export_products_product_status_status')) {
			$header[]= 'Status';
		}
		if ($this->config->get('export_products_viewed_status')) {
			$header[]= 'Viewed';
		}
		if ($this->config->get('export_products_category_status')) {
			$header[]= 'Categorie';
		}
		if ($this->config->get('export_products_tax_class_id_status')) {
			$header[]= 'Tax Class Id';
		}
		if ($this->config->get('export_products_tax_class_status')) {
			$header[]= 'Tax Class';
		}
		if ($this->config->get('export_products_sku_status')) {
			$header[]= 'SKU';
		}
		if ($this->config->get('export_products_upc_status')) {
			$header[]= 'UPC';
		}
		if ($this->config->get('export_products_ean_status')) {
			$header[]= 'EAN';
		}
		if ($this->config->get('export_products_jan_status')) {
			$header[]= 'JAN';
		}
		if ($this->config->get('export_products_isbn_status')) {
			$header[]= 'ISBN';
		}
		if ($this->config->get('export_products_mpn_status')) {
			$header[]= 'MPN';
		}
		if ($this->config->get('export_products_location_status')) {
			$header[]= 'Location';
		}
		if ($this->config->get('export_products_shipping_status')) {
			$header[]= 'Shipping';
		}
		if ($this->config->get('export_products_points_status')) {
			$header[]= 'Points';
		}
		if ($this->config->get('export_products_weight_status')) {
			$header[]= 'Weight';
		}
		if ($this->config->get('export_products_weight_class_id_status')) {
			$header[]= 'Weight Class Id';
		}
		if ($this->config->get('export_products_weight_class_status')) {
			$header[]= 'Weight Class';
		}
		if ($this->config->get('export_products_length_status')) {
			$header[]= 'Length';
		}
		if ($this->config->get('export_products_width_status')) {
			$header[]= 'Width';
		}
		if ($this->config->get('export_products_height_status')) {
			$header[]= 'Height';
		}
		if ($this->config->get('export_products_length_class_id_status')) {
			$header[]= 'Length Class Id';
		}
		if ($this->config->get('export_products_length_class_status')) {
			$header[]= 'Length Class';
		}
		if ($this->config->get('export_products_subtract_status')) {
			$header[]= 'subtract';
		}
		if ($this->config->get('export_products_minimum_status')) {
			$header[]= 'Minimum';
		}
		if ($this->config->get('export_products_sort_order_status')) {
			$header[]= 'Sort Order';
		}
		if ($this->config->get('export_products_tag_status')) {
			$header[]= 'Tag';
		}
		if ($this->config->get('export_products_meta_title_status')) {
			$header[]= 'Meta Title';
		}
		if ($this->config->get('export_products_meta_description_status')) {
			$header[]= 'Meta Description';
		}
		if ($this->config->get('export_products_meta_keyword_status')) {
			$header[]= 'Meta Keyword';
		}
		if ($this->config->get('export_products_date_added_status')) {
			$header[]= 'Date Added';
		}
		if ($this->config->get('export_products_date_modified_status')) {
			$header[]= 'Date Modified';
		}
		if ($this->config->get('export_products_date_available_status')) {
			$header[]= 'Date Available';
		}
		if ($this->config->get('export_products_attribute_id_status')) {
			$header[]= 'Attribute Id';
		}
		if ($this->config->get('export_products_attribute_name_status')) {
			$header[]= 'Attribute Name';
		}
		if ($this->config->get('export_products_attribute_value_status')) {
			$header[]= 'Attribute Value';
		}

		fputcsv($file,$header);
		if ($this->config->get('export_products_row_start')) {
			$row_start = $this->config->get('export_products_row_start');
		}else{
			$row_start = 0;
		}
		if ($this->config->get('export_products_row_end')) {
			$row_end = $this->config->get('export_products_row_end') - $this->config->get('export_products_row_start');
		}else{
			$row_end = 0;
		}
		$results = $this->model_extension_export_products->getAllProducts($row_start,$row_end);

		foreach ($results as $result) {
			
			$export_data = array();

			if ($this->config->get('export_products_product_id_status')) {
				$export_data[]= $result['product_id'];
			}
			if ($this->config->get('export_products_product_name_status')) {
				$export_data[]= $result['product_name'];
			}
			if ($this->config->get('export_products_image_path_status')) {
				$export_data[]= $result['image'];
			}
			if ($this->config->get('export_products_image_url_status')) {
				$export_data[]= HTTP_CATALOG.'image/'.$result['image'];
			}
			if ($this->config->get('export_products_description_status')) {
				$export_data[]= strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'));
			}
			if ($this->config->get('export_products_model_status')) {
				$export_data[]= $result['model'];
			}
			if ($this->config->get('export_products_quantity_status')) {
				$export_data[]= $result['quantity'];
			}
			if ($this->config->get('export_products_price_status')) {
				$export_data[]= $result['price'];
			}
			if ($this->config->get('export_products_stock_status_id_status')) {
				$export_data[]= $result['stock_status_id'];
			}
			if ($this->config->get('export_products_stock_status_status')) {
				$export_data[]= $result['stock_status'];
			}
			if ($this->config->get('export_products_manufacturer_id_status')) {
				$export_data[]= $result['manufacturer_id'];
			}
			if ($this->config->get('export_products_manufaturer_name_status')) {
				$export_data[]= $result['manufaturer_name'];
			}
			if ($this->config->get('export_products_related_product_status')) {
				$export_data[]= $this->model_extension_export_products->getRelatedProduct($result['product_id']);
			}
			if ($this->config->get('export_products_product_status_status')) {
				if ($result['status']==1) {
					$export_data[]= "Enable";
				}elseif($result['status']==0){
					$export_data[]= "Disable";
				}
			}
			if ($this->config->get('export_products_viewed_status')) {
				$export_data[]= $result['viewed'];
			}
			if ($this->config->get('export_products_category_status')) {
				$export_data[]= $this->model_extension_export_products->getAllCategory($result['product_id']);
			}
			if ($this->config->get('export_products_tax_class_id_status')) {
				$export_data[]= $result['tax_class_id'];
			}
			if ($this->config->get('export_products_tax_class_status')) {
				$export_data[]= $result['tax_class'];
			}
			if ($this->config->get('export_products_sku_status')) {
				$export_data[]= $result['sku'];
			}
			if ($this->config->get('export_products_upc_status')) {
				$export_data[]= $result['upc'];
			}
			if ($this->config->get('export_products_ean_status')) {
				$export_data[]= $result['ean'];
			}
			if ($this->config->get('export_products_jan_status')) {
				$export_data[]= $result['jan'];
			}
			if ($this->config->get('export_products_isbn_status')) {
				$export_data[]= $result['isbn'];
			}
			if ($this->config->get('export_products_mpn_status')) {
				$export_data[]= $result['mpn'];
			}
			if ($this->config->get('export_products_location_status')) {
				$export_data[]= $result['location'];
			}
			if ($this->config->get('export_products_shipping_status')) {
				$export_data[]= $result['shipping'];
			}
			if ($this->config->get('export_products_points_status')) {
				$export_data[]= $result['points'];
			}
			if ($this->config->get('export_products_weight_status')) {
				$export_data[]= $result['weight'];
			}
			if ($this->config->get('export_products_weight_class_id_status')) {
				$export_data[]= $result['weight_class_id'];
			}
			if ($this->config->get('export_products_weight_class_status')) {
				$export_data[]= $result['weight_class'];
			}
			if ($this->config->get('export_products_length_status')) {
				$export_data[]= $result['length'];
			}
			if ($this->config->get('export_products_width_status')) {
				$export_data[]= $result['width'];
			}
			if ($this->config->get('export_products_height_status')) {
				$export_data[]= $result['height'];
			}
			if ($this->config->get('export_products_length_class_id_status')) {
				$export_data[]= $result['length_class_id'];
			}
			if ($this->config->get('export_products_length_class_status')) {
				$export_data[]= $result['length_class'];
			}
			if ($this->config->get('export_products_subtract_status')) {
				if ($result['subtract']==1) {
					$export_data[]= "Yes";
				}elseif($result['subtract']==0){
					$export_data[]= "No";
				}
			}
			if ($this->config->get('export_products_minimum_status')) {
				$export_data[]= $result['minimum'];
			}
			if ($this->config->get('export_products_sort_order_status')) {
				$export_data[]= $result['sort_order'];
			}
			if ($this->config->get('export_products_tag_status')) {
				$export_data[]= $result['tag'];
			}
			if ($this->config->get('export_products_meta_title_status')) {
				$export_data[]= $result['meta_title'];
			}
			if ($this->config->get('export_products_meta_description_status')) {
				$export_data[]= $result['meta_description'];
			}
			if ($this->config->get('export_products_meta_keyword_status')) {
				$export_data[]= $result['meta_keyword'];
			}
			if ($this->config->get('export_products_date_added_status')) {
				$export_data[]= $result['date_added'];
			}
			if ($this->config->get('export_products_date_modified_status')) {
				$export_data[]= $result['date_modified'];
			}
			if ($this->config->get('export_products_date_available_status')) {
				$export_data[]= $result['date_available'];
			}
			if ($this->config->get('export_products_attribute_id_status')) {
				$export_data[]= $result['attribute_id'];
			}
			if ($this->config->get('export_products_attribute_name_status')) {
				$export_data[]= $result['attribute_name'];
			}
			if ($this->config->get('export_products_attribute_value_status')) {
				$export_data[]= $result['attribute_value'];
			}

			fputcsv($file,$export_data);
		} 
		
		fclose($file);
		exit;
	}

	public function exportProductImage(){

		$this->load->model('extension/export_products');
		
		$file_name = 'Product_Image.csv';
		header("Content-Description: File File Transfer");
		header("Content-Disposition: attachment; filename=$file_name");
		header("Content-Type: application/csv");

		$file = fopen("php://output","w");
		$header = array();

		if ($this->config->get('export_products_image_product_id_status')) {
			$header[]= 'Product Id';
		}
		if ($this->config->get('export_products_additional_images_status') == 1) {
			$header[]= 'Image Path';
		}else{
			$header[]= 'Image URL';
		}

		fputcsv($file,$header);
		if($this->config->get('export_products_additional_images_row_start')){
			$row_start = $this->config->get('export_products_additional_images_row_start');
		}else{
			$row_start = 0;
		}
		if($this->config->get('export_products_additional_images_row_end')){
			$row_end = $this->config->get('export_products_additional_images_row_end') - $this->config->get('export_products_additional_images_row_start');
		}else{
			$row_end = 0;
		}
		$results = $this->model_extension_export_products->getAllProducts($row_start,$row_end);
		
		foreach ($results as $result) {
			
			$export_data = array();

			if ($this->config->get('export_products_image_product_id_status')) {
				$export_data[]= $result['product_id'];
			}
			if ($this->config->get('export_products_additional_images_status') == 1) {
				$additionalImages= $this->model_extension_export_products->getAdditionalImage($result['product_id']);
				foreach($additionalImages as $additionalImage){
					$export_data[]= $additionalImage['image'];
				}
			}else{
				$additionalImages= $this->model_extension_export_products->getAdditionalImage($result['product_id']);
				foreach($additionalImages as $additionalImage){
					$export_data[]= HTTP_CATALOG.'image/'.$additionalImage['image'];
				}
			}
			fputcsv($file,$export_data);
		} 
		
		fclose($file);
		exit;
	}
}