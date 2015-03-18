@extends('layouts.staff')
@section('title')
	Staff Menu
@stop

@section('content')
	<ul class="menu">
		<li>{{ HTML::link('/posts', 'Manage Posts') }}</li>
		<li>{{ HTML::link('/categories', 'Manage Categories') }}</li>
		<li>{{ HTML::link('/comments', 'Manage Comments') }}</li>
		<li>{{ HTML::link('/myusers', 'Manage Users') }}</li>
		<li>{{ HTML::link('/myusers/signout', 'Sign Out') }}</li>
	</ul>
@stop