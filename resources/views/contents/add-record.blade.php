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
                                <input class="form-control" name="fname" placeholder="First Name" value="{{ old('fname') }}">
                            </div>
                                                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input class="form-control" name="mname" placeholder="Middle Name" value="{{ old('mname') }}">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderm" value="M" @if(old('gender') == 'M') checked @endif >Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="genderf" value="F" @if(old('gender') == 'F') checked @endif >Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="gendero" value="O" @if(old('gender') == 'O') checked @endif>Others
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                        	<div class="form-group">
                                <label>Birth Date</label>
                                <input class="form-control" name="bdate" type="date" value="{{ old('bdate') }}">
                            </div>
                        
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" placeholder="Address">{{ old('address') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" name="aboutme" placeholder="Say something about you...">{{ old('aboutme') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" name="dept" value="{{ old('dept') }}">
                                    
	                               	@foreach($departments as $dept)
	                               	    @if(old('dept') == $dept->id)
                                		    <option value="{{ $dept->id }}" selected> {{ $dept->deptabbv }}</option>
                                		@else
                                		    <option value="{{ $dept->id }}"> {{ $dept->deptabbv }}</option>
                                		@endif
                                	@endforeach

                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add Record</button>

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