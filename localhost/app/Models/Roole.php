<?php

namespace App\Models;

use App\Models\Base\BaseRoole;

class Roole extends BaseRoole
{
    

    public function getLabel(){
        return $this->id;
    }

}
