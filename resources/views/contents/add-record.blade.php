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
            <h1 class="page-header">Add Record</h1>
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
                        <form role="form" method="post" action="{{ route('record-store') }}">

                        	{{ csrf_field() }}
                        
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="fname" placeholder="First Name">
                            </div>
                                                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input class="form-control" name="mname" placeholder="Middle Name">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="lname" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderm" value="M" checked>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderf" value="F">Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="gendero" value="O">Others
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Record</button>
                            
                        </div>
                        <div class="col-md-6">
                        	<div class="form-group">
                                <label>Birth Date</label>
                                <input class="form-control" name="bdate" type="date">
                            </div>
                        
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" placeholder="Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" name="aboutme" placeholder="Say something about you..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" name="dept">
	                               	@foreach($departments as $dept)
                                		<option value="{{ $dept->id }}"> {{ $dept->deptabbv }}</option>
                                	@endforeach

                                </select>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#forms').addClass('active');
    </script>
@endsection