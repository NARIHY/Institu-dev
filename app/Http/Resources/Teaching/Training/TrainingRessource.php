<?php

namespace App\Http\Resources\Teaching\Training;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class TrainingResource
 *
 * Transforms a training program model into a JSON representation.
 *
 * @package App\Http\Resources\Teaching\Training
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class TrainingRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * This method defines how the training program model should be transformed into an array
     * when returning it as a JSON response. It maps the model's attributes to the desired
     * structure for the API response.
     *
     * @param Request $request The incoming request instance.
     *
     * @return array<string, mixed> An associative array representing the training program,
     *                              including its ID, name, description, and timestamps.
     */
    public function toArray(Request $request): array
    {
        return [
            'training_id' => $this->id,
            'training_name' => $this->training_name,
            'training_description' => $this->training_description,
            'training_created_at' => $this->created_at,
            'training_updated_at' => $this->updated_at,
        ];
    }
}
