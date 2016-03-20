<h2><?php echo $text_in_title; ?></h2>
<div class="content">
<p><?php echo $text_checkout; ?></p>
  <p><?php echo $text_payment; ?></p>
  <b><?php echo $text_address; ?></b> <a href="<?php echo $payable; ?>" target="_blank"><?php echo $payable; ?></a> (opens in a new window)<br /><br /><br /><br />


</div>
<div class="buttons">
  <div class="right">
    <input type="button" value="<?php echo $button_confirm; ?>" id="button-confirm" class="button" />
  </div>
</div>
<script type="text/javascript"><!--
$('#button-confirm').bind('click', function() {
	$.ajax({ 
		type: 'get',
		url: 'index.php?route=payment/dwollahub/confirm',
		success: function() {
			location = '<?php echo $continue; ?>';
		}		
	});
});
//--></script> 
