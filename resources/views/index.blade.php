@extends('parent')

@section('main')
<table class="table table-bordered table-striped">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
    </tr>
    @foreach($data as $row)
    <tr>
        <td>{{ $row->first_name }}</td>
        <td>{{ $row->last_name }}</td>
        <td>
            <a href="{{ route('member.show', $row->id)}}" class="btn btn-primary">Display</a>
        </td>
    </tr>
    @endforeach
</table>
{!! $data->links() !!}
@endsection