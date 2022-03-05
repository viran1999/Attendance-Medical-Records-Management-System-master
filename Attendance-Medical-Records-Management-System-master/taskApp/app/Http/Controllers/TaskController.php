  <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    public function store(Request $request){
        dd($request->all());
        $mr=new medical_records;
        $mr->student_id->request->Sid;
        $mr->name->request->name;
        $mr->date->request->DoS;
        
        $task->save();
    }
}
 