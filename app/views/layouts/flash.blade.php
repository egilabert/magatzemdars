<?php //dd(Session::has('flash_notification')); ?>

@if (Session::has('flash_notification.message'))

	@if (Session::has('flash_notification.overlay'))

		@include('layouts.partials.modal', ['modalClass' => 'flash_modal', 'title' => 'Notice', 'body' => Session::get('flash_notification.message') ])

	@else

		<div class="alert alert-{{Session::get('flash_notification.level') }} flash">

			<button type="button" class="close" data-dismiss="alert">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>

			<h5>{{ Session::get('flash_notification.message') }}</h5>
		</div>

	@endif

@endif

{{ Session::forget('flash_notification') }}
