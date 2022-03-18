@extends('layouts.forum')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 border border-1 mt-5">
                <h3 class="bg-light border border-1 pt-3 pb-3 mt-3">{{$post->title}}</h3>
                    {!!$post->content!!}
                <hr>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <a href="{{url('/')}}/{{$post->id}}/edit" class="btn btn-secondary me-md-2" type="button">수정</a>
                    <form method="POST" action="/{{$post->id}}/delete">
                            @method('DELETE')
                            @csrf
                        <button class="btn btn-danger" type="submit">삭제</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection