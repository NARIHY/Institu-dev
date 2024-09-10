<?php

namespace App\Http\Resources\Teaching\Periods;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PeriodsRessources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'period_id' => $this->id,
            'period_name' => $this->period_name,
            'period_description' => $this->period_description,
            'period_start_date' => $this->start_date,
            'period_end_date' => $this->end_date,
            'period_created_at' => $this->created_at,
            'period_updated_at' => $this->updated_at,
        ];
    }
}
