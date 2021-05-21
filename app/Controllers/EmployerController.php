<?php

namespace App\Controllers;

use App\Models\Employee;

class EmployerController extends BaseController
{
	public function index()
	{
		$employee = new Employee();
		$data['employee'] = $employee->findAll();
		return view('Employer/index', $data);
	}

	public function create()
	{
		return view('Employer/create');
	}

	public function store()
	{
		$employee = new Employee();
		$data = [
			'first_name' => $this->request->getPost('first_name'),
			'last_name' => $this->request->getPost('last_name'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('email'),
			'designation' => $this->request->getPost('designation'),
			'created_at' => '',
		];
		$employee->save($data);
		return redirect()->to(base_url('employes'))->with('status','employé ajouté avec succes');
	}

	public function edit($id)
	{
		$employee = new Employee();
		$data['employee'] = $employee->find($id);
		return view('Employer/edit', $data);
	}
	public function update($id)
	{
		$employee = new Employee();
		$employee->find($id);
		$data = [
			'first_name' => $this->request->getPost('first_name'),
			'last_name' => $this->request->getPost('last_name'),
			'email' => $this->request->getPost('email'),
			'phone' => $this->request->getPost('email'),
			'designation' => $this->request->getPost('designation'),
			'created_at' => '',
		];
		$employee->update($id, $data);
		return redirect()->to(base_url('employes'))->with('status','employé upadeted avec succes');
	}
	
	public function delete($id)
	{
		$employee = new Employee();
		$employee->delete($id);
		return redirect()->to(base_url('employes'))->with('status','employé deleted avec succes');
	}
}
