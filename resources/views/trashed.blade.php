@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-md-6">
                Trashed Posts
              </div>
              <div class="col-md-6 d-flex justify-content-end">
                <a class="btn btn-sm btn-success mx-1" href="{{ route('posts.create') }}">Create</a>
                <a class="btn btn-sm btn-warning mx-1" href="">Trashed</a>
              </div>
            </div>
          </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 5%">#</th>
                        <th scope="col" style="width: 5%">Image</th>
                        <th scope="col" style="width: 10%">Title</th>
                        <th scope="col" style="width: 20%">Description</th>
                        <th scope="col" style="width: 5%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 15%">Actions</th> 
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($posts as $post)
                        <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td> 
                              <img src="{{ asset($post->image) }}" alt="" width="80px">
                          </td>
                          <td>
                              {{ $post->title }}
                          </td>
                          <td>
                            {{ $post->description }}
                          </td>
                          <td> {{ $post->category_id }}</td>
                          <td> {{ date('d-m-Y', strtotime($post->created_at))}}</td>
                          <td>
                            <div class="d-flex">
                              <a class="btn btn-sm btn-success" href="{{ route('posts.restore', $post->id) }}">Restore</a>
                              <form action="{{ route('posts.force_delete', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection