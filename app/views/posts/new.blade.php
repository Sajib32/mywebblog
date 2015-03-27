@extends('layouts.staff')
@section('title')
	New Post
@stop

@section('content')
<table>
	{{ Form::open(array('url'=>'posts/create')) }}
  <tr>
    <th>{{ Form::label('title', 'Title') }}</th>
    <td>{{ Form::text('title', null) }}</td>
  </tr>
      
  <tr>
    <th>{{ Form::label('body', 'Body') }}</th>
    <td>{{ Form::textarea('body', null) }}</td>
  </tr>
 
</table>
{{ Form::submit('Create Task') }}
@stop