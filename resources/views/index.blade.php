@extends('layouts.app')
@section('title' , 'The List OF Tasks')


@section('content')
    <div>
        <div>
            @forelse ($tasks as $task )
            <div>
                <a href="{{ route('tasks.show' , ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
            @empty
            <div>There are no tasks</div>
            @endforelse
        </div>




        {{-- @if (count($tasks))
            @foreach ($tasks as $task )
                <div>{{ $task->title }}</div>
                <div>{{ $task->description }}</div>

                <br>
            @endforeach
        @endif --}}

        {{-- @for ($i = 0 ; $i < 10 ; $i++)
            The current value is {{ $i }} <br>
        @endfor --}}

        {{-- @can('update' , $post)
            u can update post
            @elsecan('create' , \App\Models\PostModel::class)
            u can create
        @endcan --}}
    </div>
@endsection

