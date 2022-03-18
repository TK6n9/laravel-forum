@extends('layouts.forum')

@section('inside_head_tag')
<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <label>제목</label>
            <input type="text" class="form-control" id="title" value="{{$post->title}}">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <!--<label>카테고리</label> -->
            <select class="form-select" id="category_id">
                @foreach($categories as $category)
                <option value="{{$category->id}}"{{$category->id == $post->category_id ? "selected" : ""}}>{{$category->title}}</option>
                @endforeach
            </select> 
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div id="editor">{!!$post->content!!}</div>
            
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="btn btn-success" type="button" id="Submit">수정완료</button>
            </div>
        </div>
    </div>
</div>

    <input type="hidden" id="post_id" value="{{$post->id}}">
    @endsection

    @section('before_body_end_tag')
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    $( document ).ready(function() {
        $('#Submit').click(function(){
            var post_id = $("#post_id").val();
            var title = $("#title").val();
            var category_id =$("#category_id").val();
            var content = $('.ck-content').html();
            

            $.ajax({
                type: "POST",
                url: "/update",
                data: {
                    _token: CSRF_TOKEN,
                    post_id: post_id,
                    title: title,
                    category_id: category_id,
                    content: content,
                },
                dataType: 'JSON',
                success: function success(data){
                    console.log(data.result);
                    window.location.href = '/'+post_id+'/view';
                },
                error: function(response){
                    console.log(response);
                    
                }
            });

        });
    });
</script>
@endsection