<!DOCTYPE html>
<html>
<head>
	<title>Daftar User</title>
</head>
<body>
	<div class="table-responsive">
		<table class="table table-bordered table-striped">
			<tr>
				<td><b class="myProfile">My Profile<b></td>
			</tr>
		</table>
		<table class="table table-bordered table-striped table-hover member-profile">
			<tbody>
				<?php
				foreach($t_user as $tuser)
				{?>
					<tr>
						<th>ID</th>
						<td><?php echo $tuser->id ?></td>
					</tr>
					<tr>
						<th>Username</th>
						<td><?php echo $tuser->username ?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $tuser->email ?></td>
					</tr>
					<tr>
						<th>Fullname</th>
						<td><?php echo $tuser->fullname ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<table class="table table-bordered table-striped">
			<tr>
				<td><button class="btn btn-danger" onclick="edit_user(<?php echo $tuser->id;?>)">Edit Profile</button></td>
			</tr>
			<!-- <tr>
				<td><center><?php echo anchor('admin\My_info/ngedit_pass/'.$tuser->id, 'Edit Password'); ?></center></td>
			</tr> -->
			<tr>
				<td><button class="btn btn-danger" onclick="ngapus_user(<?php echo $tuser->id;?>)">Hapus Akun</button></td>
			</tr>
		</table>
	</div>
</body>
</html>

