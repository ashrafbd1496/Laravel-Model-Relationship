@extends('layouts.app')

@section('main')

    <div class="wrap-table ">
        <a class="btn-primary btn-sm btn" href="{{route('category.create')}}">Add New Category</a>
        <a class="btn-warning btn-sm btn" href="{{route('post.index')}}">Posts</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Categories</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Post Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_cat as $cat)
                    <tr>
                        <td>{{$loop ->index +1}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->slug}}</td>

                        <td>
                           @if(isset($cat ->post->id))

                            {{$cat ->post->title}}
                            @endif

                        </td>

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
