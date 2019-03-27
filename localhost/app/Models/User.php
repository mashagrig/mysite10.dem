<?php

namespace App\Models;

use App\Models\Base\BaseUser;

class User extends BaseUser
{
    protected static $nameColumn = 'name';

    public function getLabel(){
        return $this->name ?: $this->id;
    }

}
