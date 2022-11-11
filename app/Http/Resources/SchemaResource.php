<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchemaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){

        return [
            'id' => $this->id,
            'name' => $this->name,
            'database' => $this->database->real_name,
            'tables' => $this->tables()->pluck('alias'),
        ];
    }
}
