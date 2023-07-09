<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gender Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{ route('user.profile.updateGender') }}" method="POST">
		@csrf
		@method('PATCH')
      <div class="modal-body">
        <div class="card">
			<div class="card-header">
			  <span>
				Gender : 
			  </span>
			  <div class="form-group">
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="Male" @if ($employeeDetails->gender == 'Male') checked @endif>
							Male
							<i class="input-frame"></i>
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender" id="optionsRadios3" value="Female" @if ($employeeDetails->gender == 'Female') checked @endif>
							Female
							<i class="input-frame"></i>
						</label>
					</div>
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