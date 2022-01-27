<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use URL;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"    => $this->id,
            "uuid"  => $this->uuid,
            "code"  => $this->code,
            "product_name"  => $this->product_name,
            "short_name"    => $this->short_name,
            "group_uuid"    => $this->group_uuid,
            "group_name"    => $this->group->group_name,
            "cateogory_uuid" => $this->cateogory_uuid,
            "category_name" => $this->category->category_name,
            "item_type"     => $this->item_type,
            "min_stock"     => $this->min_stock,
            "tax_type"      => $this->tax_type,
            "sellable"      => $this->sellable,
            "primary_photo" => $this->primary_photo ? URL::to("/") ."/".$this->primary_photo: null,
            "created_at" => date_format($this->created_at,"Y-M-d H:i:s a"),
            "updated_at" => date_format($this->updated_at,"Y-M-d H:i:s a"),
            "deleted_at" => $this->deleted_at ? date_format($this->deleted_at,"Y-M-d H:i:s a") : null
        ];
    }
}
