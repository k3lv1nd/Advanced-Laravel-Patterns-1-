@extends('layouts.app')

@section('content')

    <form method="post" action="{{route('addemployee')}}" >
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"  >
        </div>
        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" class="form-control" name="designation"  >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection