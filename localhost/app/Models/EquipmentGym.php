<?php

namespace App\Models;

use App\Models\Base\BaseEquipmentGym;

class EquipmentGym extends BaseEquipmentGym
{
    

    public function getLabel(){
        return $this->id;
    }

}
