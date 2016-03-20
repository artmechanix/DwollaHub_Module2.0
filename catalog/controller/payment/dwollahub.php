<?php
class ControllerPaymentDwollaHub extends Controller {
	protected function index() {
		$this->language->load('payment/dwollahub');
		
		$this->data['text_in_title'] = $this->language->get('text_in_title');
		
		$this->data['text_checkout'] = $this->language->get('text_checkout');
    	
    	$this->data['text_payable'] = $this->language->get('text_payable');
		
		$this->data['text_address'] = $this->language->get('text_address');
		
		$this->data['text_payment'] = $this->language->get('text_payment');
		
		$this->data['button_confirm'] = $this->language->get('button_confirm');
		
		$this->data['payable'] = $this->config->get('dwollahub_payable');
		
		$this->data['address'] = nl2br($this->config->get('config_address'));

		$this->data['continue'] = $this->url->link('checkout/success');
		
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/payment/dwollahub.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/payment/dwollahub.tpl';
		} else {
			$this->template = 'default/template/payment/dwollahub.tpl';
		}	
		
			$this->render(); 
	}
	
	public function confirm() {
		$this->language->load('payment/dwollahub');
		
		$this->load->model('checkout/order');
	
	
		$comment .= $this->language->get('text_payment') . "\n\n";
		
		$comment .= $this->language->get('text_address') . "\n";
		
		$comment .= $this->config->get('dwollahub_payable') . "\n\n";
		
		
		$this->model_checkout_order->confirm($this->session->data['order_id'], $this->config->get('dwollahub_order_status_id'), $comment, true);
	}
}
?>