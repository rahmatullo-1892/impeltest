<?php
namespace App\Controllers\Leads;

use App\Models\LeadsProductsModel;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class Products extends Controller
{
    use ResponseTrait;

    private function strip_tags_content($text, $tags = '') {
        preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
        $tags = array_unique($tags[1]);

        if(is_array($tags) AND count($tags) > 0) {
            return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
        } else {
            return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
        }
    }

    public function index($offset = 0) {
        $product = new LeadsProductsModel();
        $data['products'] = $product->where("status", 0)->findAll(20, $offset);
        return view("welcome_message", $data);
    }

    public function insert() {
        $product = new LeadsProductsModel();
        $data = [
            'name' => $this->strip_tags_content($this->request->getVar("name")),
        ];
        $product->insert($data);
        $id = $product->getInsertID();
        return $this->respond([ "event" => true, "message" => "Done", "id" => $id ], 200);
    }

    public function update($id) {
        $product = new LeadsProductsModel();
        $data = [
            'name' => $this->strip_tags_content($this->request->getVar("name")),
        ];
        $product->update($this->strip_tags_content($id), $data);
        return $this->respond([ "event" => true, "message" => "Done" ], 200);
    }

    public function delete($id) {
        $product = new LeadsProductsModel();
        $data = [
            'status' => 1,
        ];
        $product->update($this->strip_tags_content($id), $data);
        return $this->respond([ "event" => true, "message" => "Done" ], 200);
    }

    public function search($name) {
        $name = $this->strip_tags_content($name);
        $product = new LeadsProductsModel();
        return $this->respond([ "event" => true, "message" => "Done", "data" => $product->where("name", $name)->findAll() ], 200);
    }

    public function offset($offset) {
        $product = new LeadsProductsModel();
        return $this->respond([ "event" => true, "message" => "Done", "data" => $product->where("status", 0)->findAll(20, $offset) ], 200);
    }

}