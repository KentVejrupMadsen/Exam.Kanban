<?php
    namespace App\Http\Controllers;

    use App\Http\Requests\store\StoreTaskModelRequest;use App\Http\Requests\update\UpdateTaskModelRequest;use App\Models\TaskModel;


    class TaskController
        extends Controller
    {

        public function index()
        {
            //
        }

        public function store( StoreTaskModelRequest $request )
        {
            //
        }

        public function show( TaskModel $taskModel )
        {
            //
        }

        public function update( UpdateTaskModelRequest $request,
                                TaskModel $taskModel )
        {
            //
        }


        public function destroy( TaskModel $taskModel )
        {
            //
        }
}
?>
