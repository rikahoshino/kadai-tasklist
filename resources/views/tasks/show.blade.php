@extends('layouts.app')

@section('content')

<h1>
    id = {{$task->id}}のタスク詳細ページ
</h1>

  {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}
  
{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

<p>
    {{$task->content}}
</p>

@endsection