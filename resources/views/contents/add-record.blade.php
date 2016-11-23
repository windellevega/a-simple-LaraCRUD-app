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
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Form Elements</div>
                <div class="panel-body">
                    <div class="col-md-6">
                        <form role="form">
                        
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" placeholder="First Name">
                            </div>
                                                            
                            <div class="form-group">
                                <label>Middle Name</label>
                                <input class="form-control" placeholder="Middle Name">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">Others
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Record</button>
                            
                        </div>
                        <div class="col-md-6">
                        	<div class="form-group">
                                <label>Birth Date</label>
                                <input class="form-control" type="date">
                            </div>
                        
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" style="height:109px;" placeholder="Address"></textarea>
                            </div>

                            <div class="form-group">
                                <label>About Me</label>
                                <textarea class="form-control" style="height:85px;" placeholder="Say something about you..."></textarea>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
@endsection