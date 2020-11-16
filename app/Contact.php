<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'civilite', 'prenom', 'nom', 'fonction', 'service', 'email', 'tel', 'date_de_naissance',
        'nom_societe', 'adresse', 'code_postal', 'ville', 'num', 'site_web'
    ];
}
