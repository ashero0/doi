<h1>Make An Appointment</h1>

<div class="make-an-appointment">

	<form id="studentIDForm">
		<div class="form-group">
			<label for="exampleFormControlInput1">Enter Student ID Number</label>

			<div class="input-group input-width">
			    <input type="number" id="IDInputVerify" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">

			    <div class="input-group-append">
					<button id="submitButton" class="btn btn-secondary" type="submit">Submit</button>
				</div>
			</div>
		</div>
	</form>

	<div class="alert alert-danger input-width hidden-display" role="alert" id="invalidInputAlert">
		Please enter a 9 digit Student ID.
	</div>

	<form id="counselorForm" class="hidden-display">
		<div class="form-group">
			<label for="selectCounselor">Who would you like to see?</label>

			<div class="input-group input-width">
				<select class="form-control input-width" id="selectCounselor">
			    	<option value="-1">First Available</option>
			    </select>
			</div>
		</div>
	</form>

	<div id="appointment-datetime" style="display: flex;">
		<form id="dateForm" class="hidden-display">
			<div id="selectDate"></div>
		</form>
		<form id="timeForm">
		</form>
	</div>

</div>