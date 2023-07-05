<x-default-layout>

<form class="form">
	<div class="card-body">
		<div class="form-group">
			<label>Full Name:</label>
			<input type="email" class="form-control" placeholder="Enter full name"/>
			<span class="form-text text-muted">Please enter your full name</span>
		</div>

		<div class="separator separator-dashed my-5"></div>

		<div class="form-group">
			<label>Email address:</label>
			<input type="email" class="form-control" placeholder="Enter email"/>
			<span class="form-text text-muted">We'll never share your email with anyone else</span>
		</div>

		<div class="separator separator-dashed my-5"></div>

		<div class="form-group">
			<label>Subscription</label>
			<div class="input-group">
				<div class="input-group-prepend"><span class="input-group-text" >$</span></div>
				<input type="text" class="form-control" placeholder="99.9"/>
			</div>
		</div>

		<div class="separator separator-dashed my-5"></div>

		<div class="form-group">
			<label>Communication:</label>
			<div class="checkbox-list">
				<label class="checkbox">
					<input type="checkbox"/>
					<span></span>
					Email
				</label>
				<label class="checkbox">
					<input type="checkbox"/>
					<span></span>
					SMS
				</label>
				<label class="checkbox">
					<input type="checkbox"/>
					<span></span>
					Phone
				</label>
			</div>
		</div>
	</div>
	<div class="card-footer">
		<button type="reset" class="btn btn-primary mr-2">Submit</button>
		<button type="reset" class="btn btn-secondary">Cancel</button>
	</div>
</form>

</x-default-layout>