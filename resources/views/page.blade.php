@extends('layouts.master')
@section('title', 'Page title')

@section('sidebar')
	@parent

	<p>This is appended to the master sidebar</p>
@endsection
@section('content')
	<h3>{{$name}}</h3>
	<p>This is body content</p>
	}
@endsection