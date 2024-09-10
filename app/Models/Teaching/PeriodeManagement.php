<?php

namespace App\Models\Teaching;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Relates the periods to the database
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class PeriodeManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'period_name',
        'period_description',
        'start_date',
        'end_date'
    ];
}
