<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientChoix extends Model
{
    public function Client () {
        $this->belongsTo(Client::class);
    }
    protected $fillable = ['Titre_principale','Description','Nom_du_lien','Lien',
    'Titre_principal2','Titre_description','Description2','Traceur_1','Description_traceur1','Traceur_2',
    'Description_traceur2','Traceur_3','Description_traceur3','Titre_information','Description_information','Nom_lien','lien2','layout',
    'position_x_gui','position_y_gui','transition_gui','layout_settings','position_settings','transition_settings','theme','client_id','codejs'];

    use HasFactory;
}
