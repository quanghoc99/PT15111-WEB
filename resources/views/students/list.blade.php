<!-- Ke thua view master: admin-layout/master.blade.php -->
@extends('admin-layout.master')

<!-- Thay doi noi dung don gian -->
@section('title', 'Title list extends from admin-layout')

<!-- Thay doi noi dung phuc tap -->
@section('content-header','danh sách sinh vien')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="col-lg-12">
    <table border='1' class='table'>
        <thead>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Active</th>
            <th>avtive</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->age }} </td>
                <td>
                    @if ($student->gender == 0)
                    Female
                    @elseif ($student->gender == 1)
                    Male
                    @else
                    Nothing
                    @endif
                </td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                <td>
                    <form action="{{'students.destroy', $student->id}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE"></input>
                        <button class="btn btn-primary">Delete</button>
                    </form>
                    <!-- <a href="{{'students.destroy', $student->id}}"><button class="btn btn-primary">Delete</button></a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
<!-- /.row -->
<!-- /.content-wrapper -->
@endsection

@section('footer', 'Footer list extends')