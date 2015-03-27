@extends('layouts.staff')
@section('title')
	Listing Posts
@stop

@section('content')
	<li>{{ HTML::link('#', 'Back') }}</li>

	<table>
		<tr>
			<th>Created</th>
			<th>Title</th>
			<th>Author</th>
			<th>Categories</th>
			<th>Status</th>
			<th>Comments</th>
		</tr>

		@foreach($posts as $post)
		<tr class="<%= cycle('row1', 'row2') %>">
	      <td>{{ $post->created_at }}</td>
	      <td>{{ $post->title }}</td>
	      <td>{{ $post->$myuser->display_name }} </td>
	      <td><%= post.categories.collect {|cat| cat.short_name}.join(", ") %></td>
	      <td><%= post.status %></td>
	      <td><%= post.comments_count %></td>
	      <td>
	        <%= link_to("Show", {:action => 'show', :id => post.id}, :target => '_blank') %>
	        <%= link_to("Edit", {:action => 'edit', :id => post.id}) %>
	        <%= link_to("Delete", {:action => 'destroy', :id => post.id}, :method => :delete, data: {:confirm => 'Are you sure?'}) %>
	      </td>
	    </tr>
	    <% end %>
	</table>

<%= link_to("New Post", :action => 'new') %>
@stop