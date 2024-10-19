<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class PaymentResource extends JsonResource
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
            'booking_id' => $this->booking_id, //mã vé 
            'transaction_id' => $this->transaction_id, //mã giao dich
            'status' => $this->status,//trạng thái thanh toán
        ];
    }
}