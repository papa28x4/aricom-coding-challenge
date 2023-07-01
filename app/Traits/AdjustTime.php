<?php

namespace App\Traits;
use Carbon\Carbon;

trait AdjustTime {

    public function created_on(){
        return $this->created_at->utcOffset(60);
    }

    public function updated_on(){
        return $this->updated_at->utcOffset(60);
    }

    public function formatDate($data){ 
        $formattedDate = Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)
                        ->format('d-m-Y H:i:s'); 
        return $formattedDate; 
    }
}