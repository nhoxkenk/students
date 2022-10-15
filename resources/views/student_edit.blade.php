@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <form action="" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control bg-secondary" id="id" name="id" aria-describedby="emailHelp" readonly value="{!! $student->id !!}">
              </div>
            <div class="mb-3">
              <label for="name" class="form-label">Fullname</label>
              <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{!! $student->fullname !!}">
            </div>
            <div class="mb-3">
              <label for="birth" class="form-label">Birthday</label>
              <input type="date" class="form-control" id="birth" name="birth" value="{!! $student->birthday !!}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="add" name="add" value="{!! $student->address !!}">
              </div>
              @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection