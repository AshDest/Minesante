<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferencesTerme extends Model
{
    use HasFactory;

    protected $table = "references_termes";

    protected $fillable = [
        'reference',
        'service_id',
        'objet',
        'date_dep',
        'date_ret',
        'moyen_trans',
        'partenaire_id',
        'lieu',
        'province_id',
        'signateur',
        'user_id',
    ];
}
