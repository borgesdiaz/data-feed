<?php

namespace App\Transformers;

use Illuminate\Support\Collection;

abstract class Transformer
{
    
    /**
     * @param Collection $items
     *
     * @return array
     */
    final public function transformCollection( $items )
    {
        if ($items instanceof Collection) {
            $items = $items->all();
        }

        $transformedItems = [];
        foreach ( $items as $item ) {
            $result = $this->transform($item);
            if ( $result ) {
                $transformedItems[] = $result;
            }
        }
        
        return $transformedItems;
    }
    
}


