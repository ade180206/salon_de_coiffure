<?php

namespace App\Enums;

enum UserRole : string
{
    case MANAGER = 'manager';
     case HAIRDRESSER = 'hairdresser';
    case CUSTOMER = 'customer';
}
