<?php 

namespace App\Services;

use App\Services\Service;
use App\Contracts\ServiceContract;
use App\Repositories\UserRepository;

class UserService extends Service implements ServiceContract {
    
    protected $userRepository;
    
    public function __contruct(UserRepository $userRepository) {
        parent::construct();
        $this->userRepository = $userRepository;
    }
    
    public function create() {
        
    }
    
    public function index() {
        
    }
    
    public function show() {
        
    }
    
    public function update() {
        
    }
    
    public function delete() {
        
    }
    
    public function getBy() {
        
    }
    
}
