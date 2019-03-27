<?php

namespace App\Models;

use App\Models\Base\BaseGym;

class Gym extends BaseGym
{
    

    public function getLabel(){
        return $this->id;
    }

}
