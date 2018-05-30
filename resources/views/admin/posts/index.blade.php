@extends('layouts.admin')




@section('content')

	<h1>Posts</h1>
	
		<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Photo</th>
				<th>Owner</th>
				<th>Category</th>
				<th>Title</th>
				<th>Body</th>
				<th>Created</th>
				<th>Updated</th>
			</tr>
		</thead>
		
		@if($posts)
			
			@foreach($posts as $post)
					<tr>
						<td>{{$post->id}}</td>
						<td><img height="50" src="{{$post->photo ? $post->photo->file : '/images/300.png'}}" /></td>
						<td>{{$post->user->name}}</td>
						<td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
						<td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->title}}</a></td>
						<td>{{str_limit($post->body, 30)}}</td>
						<td>{{$post->created_at->diffForHumans()}}</td>
						<td>{{$post->updated_at->diffForHumans()}}</td>
					</tr>
			@endforeach
		@endif
	
	</table>

	
	
	
@stop