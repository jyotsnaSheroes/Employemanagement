<!DOCTYPE html>
<html>
<head>
	<title>Event Form</title>
	<link rel="stylesheet" type="text/css" href="eventform.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Register Event</h2>
				<h4>Excited about event !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label " for="fname">Organizer Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label " for="lname">Type of Event:</label>
				  <div class="col-sm-10">     
				  <select class="browser-default custom-select">
					  <option selected>Open this select menu</option>
					  <option value="Technichal">Technichal</option>
					  <option value="Fun">Fun</option>
					  <option value="Promotional">Promotional</option>
					  <option value="Social">Social Welfare</option>
					  <option value="Meeting">Meeting</option>
				  </select>     
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label" for="email">Number of Participant:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="participant" placeholder="Enter expected number of participant" name="participant">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label" for="email">Expected Expenses:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="expense" placeholder="Enter expected expense" name="expense">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label" for="time">Time of Event:</label>
				  <div class="col-sm-10">
					<input type="time" class="form-control" id="time"  name="time">
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

