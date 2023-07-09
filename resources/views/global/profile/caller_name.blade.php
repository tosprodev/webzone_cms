<!-- Modal -->
<div class="modal fade" id="CallerModal" tabindex="-1" role="dialog" aria-labelledby="CallerModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Caller Name Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{ route('user.profile.updateCallerName') }}" method="POST">
		@csrf
      <div class="modal-body">
        <div class="card">
			<div class="card-header">
			  <span>
				Caller Name : @if (!empty($employeeDetails->caller_name))
														{{$employeeDetails->caller_name}}
														@else
															Not Set
														@endif
			  </span>
			  <div class="form-group">
					<input type="text" class="form-control" name="caller_name" autocomplete="off" placeholder="Enter your caller name">
			  </div>
			</div>
		 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>