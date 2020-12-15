@extends('layouts.app')

@section('main')

    <div class="wrap-table ">
        <a class="btn-primary btn-sm btn" href="{{route('post.create')}}">Add New Post</a>
        <a class="btn-warning btn-sm btn" href="{{route('category.index')}}">Category</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Posts</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>slug</th>
                        <th>Category</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_post as $post)
                    <tr>
                        <td>{{$loop ->index +1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>{{$post ->category ->name}}</td>
                        <td>{{$post ->content}}</td>


                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
