@extends('layouts.forum')

@section('content')
    <div class ="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-1">
                    <a href="{{url('/')}}/create" class="btn btn-success" type="button">글쓰기</a>
                  </div>
            </div>
        </div>
        <hr>

        @php
        $categories = App\Models\Category::orderby('title','asc')->get();
        @endphp

        @if(count($categories)>0)
        @foreach ($categories as $category)             
        @php
        $posts = App\Models\Post::where('category_id', $category->id)->orderby('created_at', 'desc')->get();
        @endphp

        @if(count($posts)>0)
        <div class="row mt-3">
            <div class="col-12">
                <!--$category->title-->
                <h5>글 목록</h5>
                <ul class="list-group">
                    @foreach($posts as $post)                    
                    <li class="list-group-item list-group-item-action">
                        <a href="{{url('/')}}/{{$post->id}}/view" style="text-decoration: none" class="text-dark">{{$post->title}}</a>
                        <br>
                        <small>{{$post->created_at}} | 글 번호 : {{$post->id}}</small>                        
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>
        @endif
        @endforeach            
        @endif
    </div>
@endsection
