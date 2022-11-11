<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){

        return [
            'alias' => $this->alias,
            'real_name' => $this->real_name,
            'database' => $this->database->real_name,
            'schema' => $this->schema->id,
            'columns' => $this->columns()->pluck('alias')->toArray(),
        ];
    }
}
