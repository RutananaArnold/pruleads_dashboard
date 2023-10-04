<?php


namespace App\imports;

use App\Models\Agents;
use Cassandra\Date;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SingleSheetImport implements ToCollection
{

    public function collection(Collection $rows)
{
    $counter = 0;
    $newlyAddedCount = 0;
    $existingCount = 0;

    foreach ($rows as $row) {

        if ($counter++ == 0) continue;

        $AGENCY_NUMBER = trim($row[1]);

        // Check if AGENCY_NUMBER already exists in the database
        $existingAgent = Agents::where('agent_no', $AGENCY_NUMBER)->first();

        // If an existing agent is found, increment the existing count
        if ($existingAgent) {
            $existingCount++;
            continue; // Skip insertion for existing agents
        }

        // If no existing agent is found, increment the newly added count
        $SN = trim($row[0]);
        $name = trim($row[2]);
        $Email = trim($row[21]);
        $IsActive = trim($row[17]) == 'Active' ? 1 : 0;
        $Ismanager = (trim($row[8]) == 'Agent' || trim($row[8]) == 'Intern') ? 0 : 1;
        $UnitNameDisplay = trim($row[8]);
        $TeamNameDisplay = trim($row[5]);
        $Role = trim($row[4]);
        $AgencyNameDisplay = trim($row[11]);
        $DirectorateNameDisplay = trim($row[11]);
        $AADNameDisplay = trim($row[11]);

        Agents::create([
            'id' => $SN,
            'agent_no' => $AGENCY_NUMBER,
            'name' => $name,
            'Email' => $Email,
            'mobile' => 256,
            'IsActive' => $IsActive,
            'appointed_on' => '',
            'Ismanager' => $Ismanager,
            'AttathmentCode' => 0,
            'BranchCode' => 0,
            'BranchNameDisplay' => '0',
            'UnitUnderBranchCode' => '0',
            'UnitUnderBranchManager' => '0',
            'UnitCode' => '0',
            'UnitNameDisplay' => $UnitNameDisplay,
            'TeamCode' => 0,
            'TeamNameDisplay' => $TeamNameDisplay,
            'PreviousUnitName' => '0',
            'PreviousUnitNameDESC' => '0',
            'PreviousTeamName' => '0',
            'PreviousTeamNameDESC' => '0',
            'Password' => '0',
            'Role' => $Role,
            'accept_leads' => 1,
            'profile_pic' => '0',
            'rank' => 0,
            'AgencyNameDisplay' => $AgencyNameDisplay,
            'DirectorateNameDisplay' => $DirectorateNameDisplay,
            'AADNameDisplay' => $AADNameDisplay,
            'Gender' => '0',
            'token' => '0',
        ]);

        $newlyAddedCount++;
    }

    // Create a session to store the counts
    session([
        'newly_added_count' => $newlyAddedCount,
        'existing_count' => $existingCount,
    ]);
}


}
