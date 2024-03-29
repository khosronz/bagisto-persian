<?php

namespace Webkul\API\Http\Resources\Core;

use Illuminate\Http\Resources\Json\JsonResource;

class Currency extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'direction' => $this->direction,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}