<?php

namespace App\Models;

use App\Models\Base\BaseEquipment;

class Equipment extends BaseEquipment
{
    

    public function getLabel(){
        return $this->id;
    }

}
