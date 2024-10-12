<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class PaymentDetailResource extends JsonResource
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
            'id' => $this->id,
            'payment_id' => $this->payment_id,
            'item_description' => $this->item_description,
            'amount' => $this->amount,
            'quantity' => $this->quantity,
            'status' => $this->status,
        ];
    }
}