<div class="usermetas form">
<?php echo $this->Form->create('Usermeta'); ?>
	<fieldset>
		<legend><?php echo __('Add Usermeta'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('middlename');
		echo $this->Form->input('lastname');
		echo $this->Form->input('address_lineone');
		echo $this->Form->input('address_linetwo');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('email_id');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('mobile_number');
		echo $this->Form->input('dob');
		echo $this->Form->input('gender');
		echo $this->Form->input('profile_image');
		echo $this->Form->input('social_fb');
		echo $this->Form->input('social_twitter');
		echo $this->Form->input('status');
		echo $this->Form->input('flag');
		echo $this->Form->input('createdby');
		echo $this->Form->input('modifiedby');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usermetas'), array('action' => 'index')); ?></li>
	</ul>
</div>
