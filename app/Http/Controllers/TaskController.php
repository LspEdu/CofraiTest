<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $allTasks = Task::where('is_completed','false')->get();


        $today =    Carbon::now();
        $yesterday = Carbon::yesterday();
        $tomorrow = Carbon::tomorrow();

        $nextWeek = Carbon::now()->addWeek();
        $nextnextWeek = Carbon::now()->addWeek(2);

        $nextMonth = Carbon::now()->addMonth();

        $delayedTasks    = [];
        $todayTasks      = [];
        $tomorrowTasks   = [];
        $nextWeekTasks   = [];
        $nearFutureTasks = [];
        $futureTasks     = [];

        foreach($allTasks as $task){

            //Check for delayed uncompleted Tasks
            if($task->start_date < $yesterday){
                $delayedTasks[] = $task;
            }else{
                //Check for today tasks
                if($yesterday < $task->start_date && $task->start_date < $today ){
                    $todayTasks[]   = $task;
                }else{
                    //Check for tomorrow tasks
                    if($task->start_date > $today && $task->start_date < $tomorrow){
                        $tomorrowTasks[] = $task;
                    }else{
                        //Check for next Week tasks
                        if($task->start_date > $nextWeek && $task->start_date < $nextnextWeek){
                            $nextWeekTasks[] = $task;
                        }else{
                            //Check for near future tasks
                            if($task->start_date <= $nextMonth){
                                $nearFutureTasks[] = $task;
                            }
                        }
                    }
                }
            }



            //Check for future tasks
            if($task->start_date > $nextMonth){
                $futureTasks[]  = $task;
            }


        }



        $taskGroup = TaskGroup::all();

        return view('dashboard', [
            'delayedTasks'      => $delayedTasks,
            'todayTasks'        => $todayTasks,
            'tomorrowTasks'     => $tomorrowTasks,
            'nextWeekTasks'     => $nextWeekTasks,
            'nearFutureTasks'   => $nearFutureTasks,
            'futureTasks'       => $futureTasks,
            'taskGroup'         => $taskGroup,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
