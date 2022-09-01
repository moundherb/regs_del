<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'father_name',
        'family_name',
        'natio',
        'id_card_number',
        'id_card_date',
        'sex',
        'b_date',
        'b_place',
        'res_place',
        'edu_qualification',
        'spec',
        'academic_graduate',
        'graduation_year',
        'philo_interest',
        'study_title',
        'phone',
        'email',
        'study_proposal',
        'references',
        'examples',
        'cv',
        'profile_pic',
    ];
    protected $casts = [
        'id_card_date' => 'datetime:Y-m-d',
        'b_date' => 'datetime:Y-m-d',
        'created_at' => 'datetime:Y-m-d',
    ];
}
