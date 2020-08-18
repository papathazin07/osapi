<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public static $wrap = 'category';
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'category_name' => $this->name,
            'photo' => url($this->photo),
        ];
    }
}
