<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitUpdate extends Model
{
    // protected $fillable=['user_id','comp_name','address','momobileNum','contact_person','designation','natunatureBuss','comptbrand','dateOfVisit1','purposeVisit1','remarks1','trackermaster_id','dateOfVisit2','remarks2','purposeVisit2','dateOfVisit3','purposeVisit3','remarks3','dateOfVisit4','pupurposeVisit4','remarks4','dateOfVisit5','remarks5',
    // 'purpopurposeVisit5','ddateOfVisit6','purposeVisit6','remarks6','dateOfVisit7','purposeVisit7','remarks7','dateOfVisit8','purposeVisit8','remarks8','status','remarks9',
    //
    // ];

    protected $fillable=['trackermaster_id','dateOfVisit2','remarks2','purposeVisit2','dateOfVisit3','purposeVisit3','remarks3','dateOfVisit4','pupurposeVisit4','remarks4','dateOfVisit5','remarks5',
     'purpopurposeVisit5','ddateOfVisit6','purposeVisit6','remarks6','dateOfVisit7','purposeVisit7','remarks7','dateOfVisit8','purposeVisit8','remarks8','status','remarks9',];

    public function user(){
        return $this->belongsTo('App\User');
      }
      public function trackermasters(){
        return $this->belongsTo('App\Trackermaster');
      }
}
