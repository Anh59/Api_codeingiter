<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class APIController extends ResourceController
{
    protected $modelName = 'App\Models\UserModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('User not found');
        }
    }

    public function create()
    {

        $input = $this->request->getPost();
        
        // If input is empty, check for raw JSON input
        if (empty($input)) {
            $input = $this->request->getJSON(true);
        }

        if ($this->model->insert($input)) {
            return $this->respondCreated($input);
        } else {
            return $this->failValidationErrors($this->model->errors());
        }


    }

    public function update($id = null)
    {
        $input = $this->request->getJSON();
        if ($this->model->update($id, $input)) {
            return $this->respond($input);
        } else {
            return $this->failValidationErrors($this->model->errors());
        }
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        } else {
            return $this->failNotFound('User not found');
        }
    }
    // public function filecode($id=null){

    //      $file=$this->request->getFile('file');
        
    //     if($file){
    //         $namefile = $file->getRandomName();


    //         $file->move('file',$namefile);

    //         unlink('/file'.$this->request->getPost());

            
    //     } 
    // }   



    

       


}

