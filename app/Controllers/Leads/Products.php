<?php
namespace App\Controllers\Leads;

use App\Models\LeadsProductsModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Products extends Controller
{
    use ResponseTrait;

    public function index($offset = 0) {
        $product = new LeadsProductsModel();
        $data['products'] = $product->where("status", 0)->findAll(20, $offset);
        return view("welcome_message", $data);
    }

    public function insert() {
        $product = new LeadsProductsModel();
        $data = [
            'name' => $_POST['name'],
        ];
        $product->insert($data);
        $id = $product->getInsertID();
        return $this->respond([ "event" => true, "message" => "Done", "id" => $id ], 200);
    }

    public function update($id) {
        $product = new LeadsProductsModel();
        $data = [
            'name' => $_POST['name'],
        ];
        $product->update($id, $data);
        return $this->respond([ "event" => true, "message" => "Done" ], 200);
    }

    public function delete($id) {
        $product = new LeadsProductsModel();
        $data = [
            'status' => 1,
        ];
        $product->update($id, $data);
        return $this->respond([ "event" => true, "message" => "Done" ], 200);
    }

    public function search($name) {
        $product = new LeadsProductsModel();
        return $this->respond([ "event" => true, "message" => "Done", "data" => $product->where("name", $name)->findAll() ], 200);
    }

    public function offset($offset) {
        $product = new LeadsProductsModel();
        return $this->respond([ "event" => true, "message" => "Done", "data" => $product->where("status", 0)->findAll(20, $offset) ], 200);
    }

}