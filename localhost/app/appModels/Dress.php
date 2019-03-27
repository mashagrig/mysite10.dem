<?php

namespace App\Models;

use App\Models\Base\BaseDress;

class Dress extends BaseDress
{
    

    public function getLabel(){
        return $this->id;
    }

}
