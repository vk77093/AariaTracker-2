<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Trackermaster extends Model
{
  protected $fillable= [
  'user_id','comp_name','address','mobileNum','designation','natureBuss','dateOfVisit','purposeVisit','mom','visitStatus','reviewpoints','comptbrand','Interested','callProd','contact_person','dateOfVisit2','remarks2','purposeVisit2','dateOfVisit3','purposeVisit3','remarks3','dateOfVisit4','purposeVisit4','remarks4','dateOfVisit5',
  'remarks5', 'purposeVisit5','dateOfVisit6','purposeVisit6','remarks6','dateOfVisit7','purposeVisit7','remarks7','dateOfVisit8','purposeVisit8','remarks8','status',
];



public function user(){
    return $this->belongsTo('App\User');
  }
}
