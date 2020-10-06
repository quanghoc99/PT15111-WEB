@extends('admin-layout.master')

<!-- Thay doi noi dung don gian -->
@section('title', 'Title list extends from admin-layout')

<!-- Thay doi noi dung phuc tap -->
@section('content-header','sua thong tin ')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('students.store', $student->id)}}">
    <div class="row">    
    @csrf
        <div class="card-body col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>age</label>
                <input type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender</label>
                Female
                <input type="radio" class="form-control" name="gender" value="0" >
                <input type="radio" class="form-control" name="gender" value="1" >
                <input type="radio" class="form-control" name="gender" value="2" >
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>status</label>
                <input type="radio" class="form-control" name="is_active" value="0"  >
                <input type="radio" class="form-control" name="is_active" value="0"  >
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
    </form>
</div>
@endsection
@section('footer', 'Footer list extends')