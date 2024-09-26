<?php

namespace App\Core;


use App\Core\DB\DBModel;

abstract class UserModel extends DBModel
{
    public abstract function getDisplayName(): string;
}