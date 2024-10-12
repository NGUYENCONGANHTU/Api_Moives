<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class PaymentsResource extends JsonResource
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
            'booking_id' => $this->booking_id,
            'payment_date' => $this->payment_date,
            'amount' => $this->amount,
            'method' => $this->method,
            'status' => $this->status,
            'transaction_id' => $this->transaction_id,
        ];
    }
}