@extends('layout')

@section('content')
<div class="container">
    <a href="./student/add" class="btn btn-warning">Add new student</a>
</div>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">iD</th>
                <th scope="col">Fullname</th>
                <th scope="col">Birthday</th>
                <th scope="col">Address</th>
                <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->fullname}}</td>
                    <td>{{$student->birthday}}</td>
                    <td>{{$student->address}}</td>
                    <td><a href="/student/{!! $student->id !!}/edit" class="btn btn-primary">Edit</a></td>
                </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection