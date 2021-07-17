@extends('parent')

@section('main')

<div class="jumbotron text-center">
    <div align="right">
        <a href="{{ route('member.index') }}" class="btn btn-default" id="button_back">Back to Homepage</a>
    </div>
    <br />
    <div id="display_name">
        <h3><span class="head_name"> First Name :</span><span class="result_name"> {{ $data->first_name }} </span></h3>
        <h3><span class="head_name"> Last Name :</span><span class="result_name"> {{ $data->last_name }}</span></h3>
    </div>
</div>
@endsection