<?php namespace App\Models;

use CodeIgniter\Model;

class LeadsProductsModel extends Model
{
    protected $table = 'leads_source';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'status'
    ];

    protected $returnType = 'array';
    protected $useTimestamps = true;
}