@extends('Backend::layouts.master')
@section('content')
<!--<h1>Backend login</h1>-->
<div class="panel panel-default">
    <div class="panel-heading">Login system</div>
    <div class="panel-body">

        {!!Form::open()!!}
        <div class="form-group">
            <label>Username</label>
            {!!Form::text('email', null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            <label>Password</label>
            {!!Form::password('password', ['class'=>'form-control'])!!}
        </div>
        <input type="submit" class="btn btn-success" value="Login" />
        {!!Form::close()!!}
    </div>
</div>
@endsection