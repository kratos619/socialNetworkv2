<?php
namespace App\Traits;

/**
 *
 */
 use App\Freandship;

 trait Firendable
 {
     public function add_friend($user_requested_id)
     {
         $Firendship = Freandship::create([
            'requester' => $this->id,
            'user_requested' => $user_requested_id
        ]);

         if ($Firendship) {
             return response()->json($Firendship, 200);
         }

         return response()->json('fail', 501);
     }

     public function acpt_friendship($requester)
     {
         $Firendship = Freandship::where('requester', $requester)->where('user_requested', $this->id)->first();

         if ($Firendship) {
             $Firendship->update([
                'status' => 1
            ]);

             return response()->json($ok, 200);
         }

         return response()->json('fail', 501);
     }
 }
