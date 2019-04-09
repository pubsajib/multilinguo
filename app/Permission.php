<?php
namespace App\Models;

use Zizaco\Entrust\EntrustPermission;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Permission extends EntrustPermission
{
	use EntrustUserTrait;
}