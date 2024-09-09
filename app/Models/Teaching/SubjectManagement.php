<?php

namespace App\Models\Teaching;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Allow to manage all subject in our school
 * @author RANDRIANARISOA <maheninarandrianarisoa@gmail.com>
 * @copyright 2024 RANDRIANARISOA
 */
class SubjectManagement extends Model
{
    use HasFactory;

    /*
    subjectName	varchar(200)	Nom de la matière
    subjectCode	varchar(200)	Code de la matière
    coefficient	varchar(20)	Coefficient
    */
    protected $fillable = [
        'id',
        'subjectName',
        'subjectCode',
        'coefficient'
    ];
}
