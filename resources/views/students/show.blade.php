@extends('admin-layout.master')

@section('title', 'Chi tiet sinh vien')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh sach sinh vien</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <table border='1' class='table'>
                <thead>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Active</th>
                </thead>
                <tbody>
                    @foreach($student as $id)
                        <tr>
                            <td>{{ $id->name }}</td>
                            <td>{{ $id->phone }}</td>
                            <td>{{ $id->age }} </td>
                            <td>
                                @if ($id->gender == 0)
                                    Female
                                @elseif ($id->gender == 1)
                                    Male
                                @else
                                    Nothing
                                @endif
                            </td>
                            <td>{{ $id->address }}</td>
                            <td>{{ $id->is_active == 1 ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<!-- View hien thi chi tiet sinh vien -->
@endsection('content')
