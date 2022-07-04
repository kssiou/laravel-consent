<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   
    public function choixclients () {
      return $this->hasOne(ClientChoix::class,'client_id','id');
    }
  protected $fillable = ['Nom','Nom_d_entreprise','Email','Lien_du_site'];
    use HasFactory;

}
