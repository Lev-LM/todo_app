<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <section style="margin-top:45px">
        <div class="container">

            <form method="POST" action="{{route('home.update', $task->id)}}">
                <div class="form-group">
                    @csrf
                    @method("PUT")
                  <label for="exampleInputEmail1">Введите задачу</label>
                  <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{isset($task) ? $task->name :''}}">
                  <small id="emailHelp" class="form-text text-muted">{{isset($task) ? $task->name :''}} (текущее значение)</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Введите статус</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option>In progress</option>
                    <option>Completed</option>
                  </select>
                  <small id="emailHelp" class="form-text text-muted">{{isset($task) ? $task->status :''}} (текущее значение)</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </section>

</x-app-layout>
