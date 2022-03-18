@extends('layouts.forum')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col-12">
            <label>카테고리 null값으로만 생성됨..</label>
            <form method="POST" action="/category/store">
                @csrf

            <input type="text" class="form-control">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3" name="title">
                <button class="btn btn-primary" type="submit">생성</button>
            </div>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                @foreach ($categories as $category)
                <li class="list-group-item">
                    <a href="{{url('/')}}/category/{{$category->id}}/view">
                    {{$category->title}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection