@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                Show Post
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn-sm btn-success mx-1" href="{{ route('posts.create') }}">Create</a>
                <a class="btn btn-sm btn-warning mx-1" href="">Trashed</a>
              </div>
            </div>
          </div>

            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                          <td>ID</td>
                          <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td><img width="300px" src="{{ asset($post->image) }}" alt=""></td>
                        </tr>
                        <tr>
                          <td>Title</td>
                          <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                          <td>Description</td>
                          <td>{{ $post->description }}</td>
                        </tr>
                        <tr>
                          <td>Category</td>
                          <td>{{ date('d-m-Y', strtotime($post->created_at))}}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection