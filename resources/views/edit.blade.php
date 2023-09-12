@extends('layouts.master')

@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    Edit Post
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-sm btn-success mx-1" href="">Back</a>
                  </div>
                </div>
              </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Option</label>
                        <select name="" id="" class="form-control">
                            <option value="">test1</option>
                            <option value="">test2</option>
                            <option value="">test3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name=""  class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection