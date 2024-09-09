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
            'id' => $this->id,
            'subjectName' => $this->subjectName,
            'subjectCode' => $this->subjectCode,
            'coefficient' => $this->coefficient,
        ];
    }
}
