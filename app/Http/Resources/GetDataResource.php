<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GetDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'full_name' => $this->full_name,
            'description' => $this->description,
            'repo_url' => $this->svn_url, 
            'language' => $this->language, 
            'number_of_stars' => $this->stargazers_count, 
            'created_at' => date('d-m-Y', strtotime($this->created_at)),
        ];
    }
}
