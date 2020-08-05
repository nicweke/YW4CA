<?php

namespace App\Observers;

use App\Volunteer;
use App\Mail\VolunteerActivated;
use Illuminate\Support\Facades\Mail;

class VolunteerObserver
{
    /**
     * Handle the volunteer "created" event.
     *
     * @param  \App\Volunteer  $volunteer
     * @return void
     */
    public function created(Volunteer $volunteer)
    {
        //
    }

    /**
     * Handle the volunteer "updated" event.
     *
     * @param  \App\Volunteer  $volunteer
     * @return void
     */
    public function updated(Volunteer $volunteer)
    {
        //check if inactive role is changed from inactive to active
        
        if($volunteer->getOriginal('is_active') == FALSE && $volunteer->is_active == TRUE){
        
            //send mail
            Mail::to($volunteer->owner)->send(new VolunteerActivated($volunteer));
    
            //convert customer role to seller
            $volunteer->owner->setRole('volunteer');
                
            }
            else{
                //dd('Shop Is Inactive');
            }
    }

    /**
     * Handle the volunteer "deleted" event.
     *
     * @param  \App\Volunteer  $volunteer
     * @return void
     */
    public function deleted(Volunteer $volunteer)
    {
        //
    }

    /**
     * Handle the volunteer "restored" event.
     *
     * @param  \App\Volunteer  $volunteer
     * @return void
     */
    public function restored(Volunteer $volunteer)
    {
        //
    }

    /**
     * Handle the volunteer "force deleted" event.
     *
     * @param  \App\Volunteer  $volunteer
     * @return void
     */
    public function forceDeleted(Volunteer $volunteer)
    {
        //
    }
}
