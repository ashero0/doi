<h1>Make An Appointment</h1>
<div class="input-group mb-3 input-width">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Enter Student ID:</span>
  </div>
  
  <input type="number" id="IDInputVerify" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
  <div class="input-group-append">
    <button class="btn btn-outline-primary" type="button" onclick="validateInput()">Submit</button>
  </div>
</div>

<div class="alert alert-danger input-width hidden-display" role="alert" id="invalidInputAlert">
  Please enter a 9 digit Student ID.
</div>


<!--
	display: hidden;
<div class="input group mb-3">
	<input type="number" min="0" max="999999999" required>
</div> -->