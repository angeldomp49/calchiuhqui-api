<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DatabaseResource extends JsonResource
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
            'host' => $this->host,
            'username' => $this->username,
            'schemas' => $this->schemas()->pluck('name')->toArray()
        ];
    }
}
