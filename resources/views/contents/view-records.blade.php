@extends('layouts.dashboard')
@section('title', 'View Records')

@section('page-header')
	<div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
            <li class="active">Icons</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View Records</h1>
        </div>
    </div><!--/.row-->
@endsection

@section('content')
    @include('errors.forms')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Records</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>About Me</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($records as $record)
                            <tr>
                                <td scope="row">{{ $record->firstname }}</td>
                                <td>{{ $record->middlename }}</td>
                                <td>{{ $record->lastname }}</td>
                                <td>{{ $record->gender }}</td>
                                <td>{{ $record->birthday }}</td>
                                <td>{{ $record->address }}</td>
                                <td>{{ $record->aboutme }}</td>
                                <td>{{ $record->department->deptabbv }}</td>
                                <td width="50px;">
                                    <form style="width:25px;float:left;">
                                        {{ csrf_field() }}
                                        <button type="submit" style="border:0;background:none;">
                                            <span style="color:green;" class="glyphicon glyphicon-pencil"></span>
                                        </button>
                                    </form>
                                    <form style="width:25px;float:right;" action="{{ route('record-delete', ['id' => $record->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" style="border:0;background:none;">
                                            <span style="color:red;" class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8"><center>No Records Found!</center></td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->    
@endsection

@section('scripts')
    <script type="text/javascript">
        $('#tables').addClass('active');
    </script>
@endsection