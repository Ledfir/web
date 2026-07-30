<?php

namespace App\Models;

use CodeIgniter\Model;

class QuotesModel extends Model
{
    protected $table      = 'quotes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['token', 'name', 'email', 'phone', 'company', 'message', 'state'];
    protected $useTimestamps = true;
    protected $returnType = 'array';
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}