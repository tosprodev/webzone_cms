<!-- Modal -->
<div class="modal fade" id="EditAboutModal" tabindex="-1" role="dialog" aria-labelledby="EditAboutModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit About Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="{{ route('user.profile.updateProfile') }}" method="POST">
	  @csrf
	  <div class="modal-body">
		<div class="card">
		  <div class="card-header">
			<div class="form-group">
			  <label>Emergency Contact No.</label>
			  <input type="text" class="form-control" name="emergency_contact" autocomplete="off" placeholder="Emergency Contact No.">
			</div>
			<div class="form-group">
			  <label>Date of Birth</label>
			  <div class="input-group date datepicker" id="datePickerExample">
				<input type="text" class="form-control" name="dob"><span class="input-group-addon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></span>
			  </div>
			</div>
			<div class="form-group">
			  <label>Github Username</label>
			  <input type="text" class="form-control" name="github" autocomplete="off" placeholder="Github Username" value="{{ $socialMediaLinks->github }}">
			</div>
			<div class="form-group">
			  <label>Twitter Username</label>
			  <input type="text" class="form-control" name="twitter" autocomplete="off" placeholder="Twitter Username" value="{{ $socialMediaLinks->twitter }}">
			</div>
			<div class="form-group">
			  <label>Instagram Username</label>
			  <input type="text" class="form-control" name="instagram" autocomplete="off" placeholder="Instagram Username" value="{{ $socialMediaLinks->instagram }}">
			</div>
			<div class="form-group">
			  <label>Linkedin Username</label>
			  <input type="text" class="form-control" name="linkedin" autocomplete="off" placeholder="Linkedin Username" value="{{ $socialMediaLinks->linkedin }}">
			</div>
			<div class="form-group">
			  <label>Facebook Username</label>
			  <input type="text" class="form-control" name="facebook" autocomplete="off" placeholder="Facebook Username" value="{{ $socialMediaLinks->facebook }}">
			</div>
			<div class="form-group">
			  <label>Bio</label>
			  <input type="text" class="form-control" name="bio" autocomplete="off" placeholder="Write interesting about yourself">
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