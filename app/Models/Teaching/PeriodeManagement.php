<?php

namespace App\Models\Teaching;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PeriodeManagement
 *
 * Represents a period or time slot in the system.
 * This model handles the relationship between periods and the database.
 *
 * @package App\Models\Teaching
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 * @property string $period_name The name of the period.
 * @property string $period_description A description of the period.
 * @property \Illuminate\Support\Carbon|null $start_date The start date of the period.
 * @property \Illuminate\Support\Carbon|null $end_date The end date of the period.
 */
class PeriodeManagement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'period_name',
        'period_description',
        'start_date',
        'end_date'
    ];
}
