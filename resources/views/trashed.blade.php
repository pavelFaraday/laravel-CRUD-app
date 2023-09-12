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
                <a class="btn btn-sm btn-success mx-1" href="">Back</a>
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
                            
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td> 
                            <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80" alt="" width="80px">
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet.
                        </td>
                        <td>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, adipisci optio enim iusto eius.
                        </td>
                        <td>News</td>
                        <td>2-05-23</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="">Show</a>
                            <a class="btn btn-sm btn-primary" href="">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection