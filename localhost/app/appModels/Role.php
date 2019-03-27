<?php

namespace App\Models;

use App\Models\Base\BaseRole;

class Role extends BaseRole
{
    

    public function getLabel(){
        return $this->id;
    }

}
