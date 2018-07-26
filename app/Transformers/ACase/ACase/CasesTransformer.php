<?php

namespace App\Transformers\ACase\ACase;

use App\Transformers\Transformer;

class CasesTransformer extends Transformer
{
    
    public function transform($case) {
        return [
            'id' => $case->id,
            'user_id' => $case->user->id,
            'category_id' => $case->category->id,
            'description' => [
                'title' => $case->description->title,
                'description' => $case->description->description
            ],
            'name' => $case->name
        ];
    }
}



