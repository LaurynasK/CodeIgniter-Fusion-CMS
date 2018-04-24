<div id="page-wrapper">

    <div class="container-fluid">
        
        <!-- Page Heading -->
        <div class="row">
        	<div class="col-lg-12">
				<h1><?php echo lang('index_heading');?></h1>
				<p><?php echo lang('index_subheading');?></p>
				
				<div id="infoMessage"><?php echo $message;?></div>
				
				<td> <a href="<?= site_url(['auth', 'create_user']) ?>" class="btn btn-info" role="button"> + <?= lang('index_create_user_link') ?> </a> </td>
                <td> <a href="<?= site_url(['auth', 'create_group']) ?>" class="btn btn-success" role="button"> + <?= lang('index_create_group_link') ?> </a> </td>
                <br>
                <br>
				<table class="table table-hover">
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
					<?php foreach ($users as $user):?>
						<tr>
				            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
				                <?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
						</tr>
					<?php endforeach;?>
				</table>
				

			</div>
		</div>
	</div>
</div>