@extends('layouts.backend')



@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="/css/treeview.css" rel="stylesheet">

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Manage Category TreeView</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-6">
					<h3>Category List</h3>
					<ul id="tree1">
						@foreach($categories as $category)
						<li>
							{{ $category->title }}
							@if(count($category->childs))
							@include('backend.category.manageChild',['childs' => $category->childs])
							@endif
						</li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-6">
					<h3>Add New Category</h3>


					{!! Form::open(['route'=>'add.category']) !!}


					@if ($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>{{ $message }}</strong>
					</div>
					@endif


					<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
						{!! Form::label('Title:') !!}
						{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
						<span class="text-danger">{{ $errors->first('title') }}</span>
					</div>


					<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
						{!! Form::label('Category:') !!}
						{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
						<span class="text-danger">{{ $errors->first('parent_id') }}</span>
					</div>


					<div class="form-group">
						<button class="btn btn-success">Add New</button>
					</div>


					{!! Form::close() !!}


				</div>
			</div>


		</div>
	</div>
</div>
<script src="/js/treeview.js"></script>
@endsection