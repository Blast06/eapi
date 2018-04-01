<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    //AQUI TRANSFORMAMOS LA FORMA DE COMO VAMOS A MOSTRAR LOS DATOS EN LA API
    public function toArray($request)
    {
        return [
            'name'=> $this->name,
            'description'=> $this->detail,
            'price'=> $this->price,
            'stock'=> $this->stock,
            'discount'=> $this->discount,
            'discount'=> $this->discount,
            'published_date'=> $this->created_at,


        ];
    }
}
