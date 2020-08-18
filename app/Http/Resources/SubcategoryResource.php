<?php

namespace App\Http\Resources;
use App\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public static $wrap = 'subcategory';
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'subcaegory_name' => $this->name,
            'category_name' => Category::find($this->category_id),
        ];
    }
}
