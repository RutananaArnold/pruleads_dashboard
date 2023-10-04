<?php

namespace App\Http\Controllers\Agents;

use App\Http\Controllers\Controller;
use App\imports\MultipleSheetImport;
use App\Models\Agents;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;

class AgentsController extends Controller
{
    public function showUploadPage(){
        return view('agents/upload_agent_list');
    }

    public function uploadExcelSheet(Request $request)
    {
        $request->validate([
            'file' => 'required'
        ]);

        //Excel::import(new ImportStudent, $request->file('file')->store('files'));
        Excel::import(new  MultipleSheetImport, $request->file('file')->store('files')); // Use the import class for your Excel file

        return redirect()->back()->with('success', 'Excel data imported successfully');
    }

    public function showAgentList(){
        $agents = Agents::paginate(10)->onEachSide(3);

        return view('agents/view_agents', ['agents' => $agents]);
    }

    public function showSearchAgent(){
        return view('agents/search_agent');
    }

    public function searchAgentNumber(Request $request){
        $agentNumber = $request->input('agentNo');

        // Search for the agent using the agentNumber
        $agent = Agents::where('agent_no', $agentNumber)->first();

        if ($agent) {
        // If the agent is found, return the data in the view
        return view('agents/display_agent_detail', ['agent' => $agent]);
        } else {
        // If the agent is not found, redirect back with a message
        return redirect()->back()->with('message', 'Agent not found');
        }
    }

    public function showAgentDetail(){
        return view('agents/display_agent_detail');
    }

}
