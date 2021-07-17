@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div align="right">
    <a href="{{ route('member.index') }}" class="btn btn-default" id="button_back">Back to Homepage</a>
</div>

<form method="post" action="{{ route('member.store') }}" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="enter_name">Enter First Name</label>
        <div class="input_name">
            <input type="text" name="first_name" class="form-control input-lg" />
        </div>
    </div>

    <div class="form-group">
        <label class="enter_name">Enter Last Name</label>
        <div class="input_name">
            <input type="text" name="last_name" class="form-control input-lg" />
        </div>
    </div>
    <br>

    <div class="form-group text-center">
        <input id="add_member" type="submit" name="add" class="btn btn-primary input-lg" value="Add a member" />
    </div>

</form>

@endsection