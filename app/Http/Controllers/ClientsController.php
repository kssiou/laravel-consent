<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientChoix;


class ClientsController extends Controller
{
    //get clients
    public function getClients () {
    return Client::with('choixclients')->get();
}
  //add clients
  public function addClient (Request $request){
    $client = new Client;
    $client->Nom=$request->input('Nom');
    $client->Nom_d_entreprise=$request->input('Nom_d_entreprise');
    $client->Email=$request->input('Email');
    $client->Lien_du_site=$request->input('Lien_du_site');
    $client->save();
    $choix= new ClientChoix;
    $choix->Titre_principale=$request->input('Titre_principale');
    $choix->Description=$request->input('Description');
    $choix->Nom_du_lien=$request->input('Nom_du_lien');
    $choix->Lien=$request->input('Lien');
    $choix->Titre_principal2=$request->input('Titre_principal2');
    $choix->Titre_description=$request->input('Titre_description');
    $choix->Description2=$request->input('Description2');
    $choix->Traceur_1=$request->input('Traceur_1');
    $choix->Description_traceur1=$request->input('Description_traceur1');
    $choix->Traceur_2=$request->input('Traceur_2');
    $choix->Description_traceur2=$request->input('Description_traceur2');
    $choix->Traceur_3=$request->input('Traceur_3');
    $choix->Description_traceur3=$request->input('Description_traceur3');
    $choix->Titre_information=$request->input('Titre_information');
    $choix->Description_information=$request->input('Description_information');
    $choix->Nom_lien=$request->input('Nom_lien');
    $choix->lien2=$request->input('lien2');
    $choix->layout=$request->input('layout');
    $choix->position_x_gui=$request->input('position_x_gui');
    $choix->position_y_gui=$request->input('position_y_gui');
    $choix->transition_gui=$request->input('transition_gui');
    $choix->layout_settings=$request->input('layout_settings');
    $choix->position_settings=$request->input('position_settings');
    $choix->transition_settings=$request->input('transition_settings');
    $choix->theme=$request->input('theme');
    $choix->theme=$request->input('client_id');
    $choix->theme=$request->input('codejs');

    
    $client->choixclients()->save($choix);
   
    return response()->json($client);

}

// update Client
public function updateClient(Request $request, $id){
  $client = Client::find($id);
  if(is_null($client)){
      return response()->json(['message' => 'Client introuvable'],404);
  }
  $client->update($request->all());
  return response($client,200);
}
// delete Client
public function deleteClient(Request $request, $id){
  $client = Client::find($id);
  if(is_null($client)){
      return response()->json(['message' => 'client introuvable introuvable'],404);
  }
  $client->delete();
  return response(null,204);
}
//getClientById
public function getClientById($id){
  $client = Client::find($id);
  if(is_null($client)){
      return response()->json(['message' => 'Client introuvable'],404);
  }
  return response()->json(Client::find($id),200);
}

public function getchoixById($id){
  $choix = Client::find($id)->choixclients;
  if(is_null($choix)){
      return response()->json(['message' => 'Client introuvable'],404);
  }
  return response()->json(Client::find($id)->choixclients,200);
}
public function updateChoix(Request $request, $id){
  $choix = Client::find($id)->choixclients;

  if(is_null($choix)){
      return response()->json(['message' => 'Client introuvable'],404);
  }
  $choix->update($request->all());
  return response($choix,200);
}
}
