@extends('welcome')

@section('content')
    @foreach ($posts as $post)
        <div class="card mt-3">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                {{ $post->body }}
                <hr>
                @if ($post->comments->count() > 0)
                    <h6 class="text-muted">Comments</h6>
                    @foreach ($post->comments as $comment)
                        <ul class="list-group">
                            <li class="list-group-item">{{ $comment->body }}</li>
                        </ul>
                    @endforeach
                @endif
            </div>
            <div class="card-footer">
                <div class="float-left">
                    <small class="text-muted">author: {{ $post->user->name}}</small>                    
                </div>
                <div class="float-right">
                    <form action="/users/delete"
                        method="POST"
                    >
                        <input type="hidden" name="id" value="{{ $post->user->id }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete This User</button>
                    </form> 
                </div>
            </div>
        </div>
    @endforeach
@endsection