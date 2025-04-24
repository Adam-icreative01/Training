<?php 

namespace App\Enum;

enum Roles: string
{
    case SUPER_ADMIN = 's-admin';
    case ADMIN = 'admin';
    case USER = 'user';
    case GUEST = 'guest';
}
