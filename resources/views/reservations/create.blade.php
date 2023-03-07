@extends('layout.index')
@section('content')

<!-- ======= Reserve A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
	<div class="container" data-aos="fade-up">

	<div class="section-header">
		<h2>Reserve A Table</h2>
		<p>Reserve <span>Your Stay</span> With Us</p>
	</div>


	<div class="row g-0">

		<div class="col-lg-4 reservation-img" style="background-image: url(import/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

			<div class="col-lg-8 d-flex align-items-center reservation-form-bg">
				
				<form action="{{ route('reservations.store') }}" method="POST" class="reservation-form" data-aos="fade-up" data-aos-delay="100" >
					<div class="mb-2">
						{{-- <div class="loading">Loading</div> --}}
						@if ($message = Session::get('success'))
						<div class="alert alert-success">
							<p>{{ $message }}</p>
							</div>
						@endif
						@if ($errors->any())
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
							</ul>
						</div>
						@endif
					</div>

					@csrf
					
					<div class="row gy-4">
						
						<div class="col-lg-4 col-md-6">
							<input type="text" class="form-control" name="name"  id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>

						</div>

						<div class="col-lg-4 col-md-6">
							<input type="email" class="form-control" name="email" id="email" placeholder="email" data-rule="email" data-msg="Please enter a valid email" required>
					
						</div>
						<div class="col-lg-4 col-md-6">
						
							<input type="text" name="phone" id="phone" class="form-control" placeholder="phone" required>
				
						</div>
						<div class="col-lg-4 col-md-6">
							<input type="date" class="form-control" name="date" id="date" placeholder="date" required>
						
						</div>

						<div class="col-lg-4 col-md-6">
							<input type="time" name="time" class="form-control" id="time" placeholder="time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
					
						</div>

						<div class="col-lg-4 col-md-6">
							<input type="number" class="form-control" name="number_of_people" id="number_of_people" placeholder="people" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required> 
						
						</div>
					</div>

					<div class="form-group mt-3">
						<textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
					</div>

					{{-- <div class="mb-3">
					<div class="loading">Loading</div>
					<div class="error-message"></div>
					<div class="sent-message">Your reservation request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
					</div> --}}
					
					<div class="text-center"><button type="submit" class="btn btn-primary">Reserve a Table</button></div>

				</form>

			</div><!-- End Reservation Form -->

		</div>

	</div>
</section><!-- End Reserve A Table Section -->
@endsection