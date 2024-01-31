<?php

namespace App\Controllers;

use App\Models\ToDoModel;
use CodeIgniter\Model;

class TODOController extends BaseController
{
    public function details()
    {
        try {
            $mylist = model(ToDoModel::class);
            $data['todo'] = $mylist->select('*')->findAll();
            return view('add_details', $data);
        } catch (\Exception $e) {
            echo 'Caught exception: ', $e;
        }
    }
    // public function editdetails($id)
    // {
    //     $editlist = model(ToDoModel::class);
    //     $editdata['tododata'] = $editlist->find($id);
    //     return view('add_details', $editdata);
         
    // }

    public function editdetails($id)
{
    try {
        $editlist = model(ToDoModel::class);
        $editdata['tododata'] = $editlist->find($id);

        $mylist = model(ToDoModel::class);
        $editdata['todo'] = $mylist->select('*')->findAll();

        return view('add_details', $editdata);
    } catch (\Exception $e) {
        echo 'Caught exception: ', $e;
    }
}


    public function editupdates($id) {
        $updatedata = model(ToDoModel::class);

        $data = [
            'title' => $this->request->getPost('title'),
            'details' => $this->request->getPost('details'),
            'dates' => $this->request->getPost('datedata'),
        ];

        $updatedata->update($id, $data);
        return redirect()->to(base_url('details'))->with('status', 'Details Updated Successfully');
    }
    

    public function remove($id)
    {
        $deletedata = model(ToDoModel::class);
        $deletedata->delete($id);
        return redirect()->to(base_url('details'))->with('status', 'Details Removed Successfully');
    }
}
