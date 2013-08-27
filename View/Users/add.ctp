<div class="users form">
	<?php #echo $this->Form->create('User', array('class'=>'form-horizontal')); ?>
	<?php echo $this->Form->create('User', array('class'=>'')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
		<div class="form-group">
			<?php echo $this->Form->input('name', array('class'=>'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('email', array('class'=>'form-control')); ?>
		</div>
		<?php echo $this->Form->input('active'); ?>
		<div class="form-group">
			<?php echo $this->Form->input('birthdate'); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('profile_id'); ?>
		</div>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-default')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
