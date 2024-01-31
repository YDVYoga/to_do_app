<?php namespace App\Models;


use CodeIgniter\Model;

class ToDoModel extends Model
{
    protected $table = 'to_do_tbl';
    protected $allowedFields = ['title', 'details', 'dates'];
}

?>