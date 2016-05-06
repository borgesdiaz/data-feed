<?php

namespace App\Contracts;

Interface ServiceContract {
    
    /**
     * Create a resource
     *
     * @return string
     */
    public function create();
    
    /**
     * Get a collection of resources
     *
     * @return string
     */
    public function index();
    
    /**
     * Get a resource
     *
     * @return string
     */
    public function show();
    
    /**
     * Update a resource
     *
     * @return string
     */
    public function update();
    
    /**
     * Delete a resource
     *
     * @return string
     */
    public function delete();
    
    /**
     * Set the key to get a resource by
     *
     * @return string
     */
    public function getBy();
}
