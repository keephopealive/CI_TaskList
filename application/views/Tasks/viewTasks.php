<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Login and Registration</title>
		<script>
			// $(document).ready(function(){
			// 	$('form').on('submit', function(){
			// 		$.post(
			// 			$(this).attr('action'),
			// 			$(this).serialize,
			// 			function(data_received){
			// 				console.log('this is the data received from the ajax call: ' + data_received);		
			// 			}
			// 		)
			// 	});
			// });
		</script>
	</head>
	<body>
		<div id='container'>
			<div id='taskList'>
				<table border='1'>
					<thead>
						<tr>
							<td>Tasks</td>
						</tr>
					</thead>
					<thead>
						<tr>
							<td>Title</td>
							<td>Description</td>
							<td>Deadline</td>
							<td>Status</td>
						</tr>
					</thead>
<?php 
					foreach($users as $user)
					{
?>
					<tr>
					<form action='updateTask' method='post' >
						<td><input type='text' name='title' value='<?= $user->task_title ?>'/></td>
						<td><input type='text' name='task' value='<?= $user->task_task ?>'/></td>
						<td><input type='datetime' name='deadline' value='<?= $user->task_deadline ?>'/></td>
						<td>
							<select name='status' value='<?= $user->task_status ?>'>
								<option type='hidden' selected='<?= $user->task_status ?>'><?= $user->task_status ?></option>
								<option value='Pending'>Pending</option>
								<option value='Completed'>Completed</option>
								<option value='Overdue'>Overdue</option>
							</select>
						</td>
						<td><input type='submit' value='update'></td>
						<input type='hidden' name='task_id' value='<?= $user->task_id ?>'/>
					</form>
						<td> <!-- DELETE BUTTON -->
							<form action='deleteTask' method='post'>
								<input type='hidden' name='id' value='<?= $user->task_id ?>'>
								<input type='submit' value='Delete'>
							</form> 
						</td>
					</tr>
<?php
					}
?>
				</table>
			</div> <!-- ' OR id = 2;  '; TRUNCATE users; -->
			
			<br>

			<div id='addTask'>
				<table border='1px'>
					<thead>
						<tr>
							<td>Input a new task:</td>
						</tr>
					</thead>
					<thead>
						<tr>
							<td>Title</td>
							<td>Description</td>
							<td>Deadline</td>
							<td>Status</td>
							<td>Submit</td>
						</tr>
					</thead>
					<tr>
					<form action="inputTask" method="post">
						<td><input type='text' name='title' value='' /></td>
						<td><input type='text' name='task' value='' /></td>
						<td><input type='date' name='deadline' value='' /></td>
						<td>
							<select name='status'>
								<option value='Pending'>Pending</option>
								<option value='Completed'>Completed</option>
								<option value='Overdue'>Overdue</option>
							</select>
						</td>
						<td><input type='submit' value='Submit' /> </td>
							<input type='hidden' name='user_id' value='<?= $user->id ?>'/>
					</form>
					</tr>
				</table>
			</div>
			<br>

		</div>
	</body>
</html>