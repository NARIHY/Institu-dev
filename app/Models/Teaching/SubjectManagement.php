<?php

namespace App\Models\Teaching;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubjectManagement
 *
 * Manages the subjects offered in the school.
 * This model handles the relationship between subjects and the database.
 *
 * @package App\Models\Teaching
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 *
 * @property int $id The unique identifier for the subject.
 * @property string $subjectName The name of the subject.
 * @property string $subjectCode The unique code associated with the subject.
 * @property float $coefficient The coefficient or weight assigned to the subject.
 */
class SubjectManagement extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'subjectName',
        'subjectCode',
        'coefficient'
    ];
}
