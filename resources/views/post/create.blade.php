@extends('layouts.app')
@section('main')
    <div class="wrap ">
        <a class="btn-primary btn-sm btn" href="{{route('post.index')}}">All Posts</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Add New Post</h2>
                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input name="title" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="category[]" multiple id="">
                            @foreach($all_cat as $cat)
                                <option value="{{$cat ->id}}">{{$cat ->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea class="form-control" name="content" id="" >

                        </textarea>
                    </div>


                    <div class="form-group">
                        <input name="add" class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
