<h1>Make An Appointment</h1>

<div class="make-an-appointment">

	<form id="studentIDForm">
		<div class="form-group">
			<label for="exampleFormControlInput1">Student ID Number</label>

			<div class="input-group input-width">
			    <input type="number" id="IDInputVerify" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">

			    <div class="input-group-append">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
		</div>
	</form>

	<div class="alert alert-danger input-width hidden-display" role="alert" id="invalidInputAlert">
		Please enter a 9 digit Student ID.
	</div>

	<form id="counselorForm" class="hidden-display">
		<label for="selectCounselor">Who would you like to see?</label>

		<div class="input-group input-width">
			<select class="form-control input-width" id="selectCounselor">
		    	<option value="-1">First Available</option>
		    </select>

		    <div class="input-group-append">
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>
	</form>

	<!-- <form id="dateForm" class="hidden-display">
		<label for="selectDate">Select Date</label>
		
		<div class="input-group input-width">
			<input class="form-control" id="selectDate"/>
			<div class="input-group-append">
				<button class="btn btn-primary" type="submit">
					Submit
				</button>
			</div>
		</div>
	</form> -->

</div>