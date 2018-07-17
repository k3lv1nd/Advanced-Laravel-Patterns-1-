@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div ></div>
            <div class="row">
                <h3>Add Company details</h3>
                <form method="post" action="{{route('addcompany')}}">
                    {{csrf_field()}}
                    <div class="row">

                        <label for="right-label" class="right">Name</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" name="name">
                        <div class="row">

                            <label for="right-label" class="right">Location</label>
                        </div>
                        <div class="small-9 columns">
                            <input type="text" name="location">
                            <div class="row">

                                <label for="right-label" class="right">Servicies</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" name="servicies">


                                <input type="submit" class="button">

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>


            <div class="row justify-content-center">
                <div><h3>Listed companies</h3></div>

                <table>

                    <tr>
                        <td>Company Id:</td>
                        <td>Company Name:</td>
                        <td>Location</td>
                        <td>Servicies offered</td>
                        <td>Date of creation</td>
                    </tr>
                    @foreach($companies as $company)
                        <tr>
                            <td>{{$company->id}}</td>
                            <td>{{$company->name}}</td>
                            <td>{{$company->location}}</td>
                            <td>{{$company->servicies}}</td>
                            <td>{{$company->created_at}}</td>
                            <td><a href="{{route('getemployeeform')}}"> Add Employee</a></td>

                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
    </div>
@endsection


