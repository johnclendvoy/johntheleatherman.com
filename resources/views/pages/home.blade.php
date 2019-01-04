@extends('layouts.public')

@section('banner')
<div class="home-banner text-center">
	<div class="home-banner-text">
		<div class="home-title">John</div>
		<div class="home-subtitle">- The -</div>
		<div class="home-title">Leatherman</div>
	</div>
</div>
@stop

@section('content')

	@component('components.title_row')
		@slot('title', $feature_title)
	@endcomponent

	@include('partials.leathergrid')

	@component('components.cta_button')
		@slot('link', '/leather')
		@slot('text', 'Browse Leather')
	@endcomponent

	@component('components.title_row')
		@slot('title', 'The Process')
	@endcomponent

	<div class="row">
		<div class="col-md-4 text-center mt20">
			@include('svg.design', ['height' => '100px'])
			<h4 class="mt20">Original Designs</h4>
			<p class="mt10 text-dk-grey">Each design begins its life as an original sketch.</p>
		</div>

		<div class="col-md-4 text-center mt20">
			@include('svg.handmade', ['height' => '100px'])
			<h4 class="mt20">Hand Crafted</h4>
			<p class="mt10 text-dk-grey">My work is made with care using only hand tools.</p>
		</div>

		<div class="col-md-4 text-center mt20">
			@include('svg.unique', ['height' => '100px'])
			<h4 class="mt20">Unique Products</h4>
			 <p class="mt10 text-dk-grey">Every thing I make is one-of-a-kind.</p>
		</div>
	</div>

	@component('components.cta_button')
		@slot('link', '/about')
		@slot('text', 'Learn More')
	@endcomponent
	
@stop
