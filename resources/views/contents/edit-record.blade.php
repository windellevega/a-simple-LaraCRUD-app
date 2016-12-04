@extends('layouts.dashboard')
@section('title', 'Add Record')

@section('page-header')
	<div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Record</h1>
        </div>
    </div><!--/.row-->
@endsection

@section('content')
	@include('errors.forms')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Person Information</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form" method="post" action="{{ route('record-update', ['id' => $person->id]) }}">

                        	{{ csrf_field() }}
                        	
                        	{{ method_field('PUT') }}
                        
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="fname" placeholder="First Name" value="{{ $person->firstname }}">
                            </div>
                                                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input class="form-control" name="mname" placeholder="Middle Name" value="{{ $person->middlename }}">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="lname" placeholder="Last Name" value="{{ $person->lastname }}">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderm" value="M" {{ $person->gender == 'M' ? 'checked' : '' }}>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderf" value="F" {{ $person->gender == 'F' ? 'checked' : '' }}>Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="gendero" value="O" {{ $person->gender == 'O' ? 'checked' : '' }}>Others
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                        	<div class="form-group">
                                <label>Birth Date</label>
                                <input class="form-control" name="bdate" type="date" value="{{ $person->birthday }}">
                            </div>
                        
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" placeholder="Address">{{ $person->address }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" name="aboutme" placeholder="Say something about you...">{{ $person->aboutme }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" name="dept" value="{{ $person->deptid }}">
                                    
	                               	@foreach($departments as $dept)
                                		<option value="{{ $dept->id }}" {{ $person->deptid == $dept->id ? 'selected' : '' }}> {{ $dept->deptabbv }}</option>
                                	@endforeach

                                </select>
                            </div>

                        </div>
                        
                        <button type="submit" class="btn btn-primary">Save Record</button>
                        
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection

@section('scripts')
    
@endsection