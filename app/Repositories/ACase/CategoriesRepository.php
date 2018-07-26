<?php

namespace App\Repositories\Category;

use App\Models\ACase\Category;

class CategoriesRepository
{
    public function create(Category $category) {
        return $category->save();
    }
    
    public function update(Category $category) {
        return $category->save();
    }

    public function getById($categoryId) {
        return Category::whereId($categoryId)->first();
    }
}

