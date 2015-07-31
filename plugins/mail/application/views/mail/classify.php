<?php $genid = gen_id(); 
	require_javascript('og/modules/addMessageForm.js');
	$on_submit = "og.submit_modal_form('".$genid."formClassify'); return false;";
?>
<form id='<?php echo $genid ?>formClassify' name='formClassify' style='padding: 7px;height:100%;background-color:white; min-width: 550px; min-height: 220px'  class="internalForm miclase" onsubmit="<?php echo $on_submit?>" action="<?php echo get_url('mail','classify', array('id'=>$email->getId())) ?>" method="post">
	<input type="hidden" name="id" value="<?php echo $email->getId() ?>" />
	<input type="hidden" name="submit" value="1" />
	
	<div class="classify mail-classify-selector">
		<?php render_member_selectors(MailContents::instance()->getObjectTypeId(), $genid, $email->getMemberIds()); ?>	
		<div style="float:right;width:70px;margin-left:10px;clear: left;">
			<?php echo submit_button(lang('save'), array('tabindex' => '50'))?>
		</div>
	</div>
</form>