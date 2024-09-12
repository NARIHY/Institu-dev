<?php

namespace App\Http\Resources\Teaching\Subject;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubjectManagementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'subject_id' => $this->id,
            'subject_name' => $this->subjectName,
            'subject_code' => $this->subjectCode,
            'subject_coefficient' => $this->coefficient,
            'subject_created_at' => $this->created_at,
            'subject_updated_at' => $this->updated_at,
        ];
    }
}
