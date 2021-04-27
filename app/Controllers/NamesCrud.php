<?php namespace App\Controllers;

use App\Models\NameModel;
use CodeIgniter\Controller;

class NamesCrud extends Controller {
    public function index() {
        $model = new NameModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();

        return view('namelist', $data);
    }

    public function create() {
        return view('addname');
    }

    public function store() {
        $model = new NameModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];
        
        $model->insert($data);
        
        return redirect()->to('/namelists');
    }

    public function singleUser($id = null) {
        $model = new NameModel();

        $data['user_obj'] = $model->where('id', $id)->first();

        return view('/editnames', $data);
    }

    public function update() {
        $model = new NameModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];

        $model->update($id, $data);

        return redirect()->to('/namelists');
    }

    public function destroy($id = null) {
        $model = new NameModel();
        $data['user'] = $model->where('id', $id)->delete($id);

        return redirect()->to('/namelists');
    }
}