<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControllerTask extends CI_Controller {

	public function index()
	{
		$user = new User();
		$users = $user->include_related('task', array('id', 'title', 'task', 'deadline', 'status'), TRUE, TRUE)
		->where('id', $this->session->userdata('id'))
		->get();
		$viewBags['users'] = $users;
		$this->load->view('Tasks/viewTasks', $viewBags);
	}

	public function deleteTask()
	{
		$task = new Task();
		$task->where('id', $this->input->post('id'))->get();
		$task->delete();
		redirect('tasks');
	}

	public function inputTask()
	{
		$task = new Task();
		$task->title = $this->input->post('title');
		$task->task = $this->input->post('task');
		$task->deadline = $this->input->post('deadline');
		$task->status = $this->input->post('status');
		$task->user_id = $this->input->post('user_id');
		$task->save();
		redirect('tasks');
	}

	public function updateTask()
	{
		$task = new Task();
		$task->where('id', $this->input->post('task_id'));
		$task->update(array(
			'title' => $this->input->post('title'),
			'task' => $this->input->post('task'),
			'deadline' => $this->input->post('deadline'),
			'status' => $this->input->post('status')
		));
		redirect('tasks');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */