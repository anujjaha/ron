<div class="usermetas view">
<h2><?php echo __('Usermeta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middlename'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['middlename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Lineone'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['address_lineone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Linetwo'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['address_linetwo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Id'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['email_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Number'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['mobile_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dob'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['dob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Image'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['profile_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Fb'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['social_fb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Twitter'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['social_twitter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Createdby'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['createdby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifiedby'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['modifiedby']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usermeta['Usermeta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usermeta'), array('action' => 'edit', $usermeta['Usermeta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usermeta'), array('action' => 'delete', $usermeta['Usermeta']['id']), null, __('Are you sure you want to delete # %s?', $usermeta['Usermeta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usermetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usermeta'), array('action' => 'add')); ?> </li>
	</ul>
</div>
