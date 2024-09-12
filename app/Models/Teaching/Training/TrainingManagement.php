<?php

namespace App\Models\Teaching\Training;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainingManagement
 *
 * Represents a training program or course in the system.
 *
 * @package App\Models\Teaching\Training
 *
 * @property string $training_name The name of the training program.
 * @property string $training_description A detailed description of the training program.
 *
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class TrainingManagement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'training_name',
        'training_description'
    ];
}
