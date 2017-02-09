<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Task;

class TaskController extends Controller
{
    public function __construct(TaskRepository $tasks)
    {
        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        $currentuser = $request->user();
        if ($currentuser->role == '1')
            return view('task.index')->withTasks(Task::all());
        else
           return view('task.index', [
                'tasks' => $this->tasks->forUser($request->user()),
            ]);
    }

    public function create()
    {
    	return view('task.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'call_why' => 'required|max:255',
        ]);

        $request->user()->hasManyTasks()->create([
			'user_name' => $request->user_name,
            'cus_id' => $request->cus_id,
            'cus_tel' => $request->cus_tel,
            'call_date' => $request->call_date,
            'call_why' => $request->call_why,
            'call_ok' => $request->call_ok,            
            'call_bak' => $request->call_bak,
        ]);

        return redirect('task');
    }

    public function edit($id)
    {
        return view('task.edit')->withTask(Task::find($id));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'call_why' => 'required|max:255',
        ]);

        $task = Task::find($id);
        $task->user_name = $request->get('user_name');
        $task->cus_id = $request->get('cus_id');
        $task->cus_tel = $request->get('cus_tel');
        $task->call_date = $request->get('call_date');
        $task->call_why = $request->get('call_why');
        $task->call_ok = $request->get('call_ok');
        $task->call_bak = $request->get('call_bak');

        if ($task->save())
            return redirect('task');
        else
            return redirect()->back()->withInput()->withErrors('编辑失败！');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->back();
    }
}
