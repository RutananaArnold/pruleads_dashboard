<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $table = 'agents_sample';
    protected $fillable = [
        'id',
        'agent_no',
        'name',
        'Email',
        'mobile',
        'IsActive',
        'appointed_on',
        'Ismanager',
        'AttathmentCode',
        'BranchCode',
        'BranchNameDisplay',
        'UnitUnderBranchCode',
        'UnitUnderBranchManager',
        'UnitCode',
        'UnitNameDisplay',
        'TeamCode',
        'TeamNameDisplay',
        'PreviousUnitName',
        'PreviousUnitNameDESC',
        'PreviousTeamName',
        'PreviousTeamNameDESC',
        'Password',
        'Role',
        'accept_leads',
        'profile_pic',
        'rank',
        'AgencyNameDisplay',
        'DirectorateNameDisplay',
        'AADNameDisplay',
        'Gender',
        'token',
    ];
}
