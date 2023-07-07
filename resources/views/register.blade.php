<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required autofocus>
       </div>

       <div>
           <label for="lastname">Last Name</label>
           <input type="text" id="lastname" name="lastname" required>
       </div>

       <div>
           <label for="username">Username</label>
           <input type="text" id="username" name="username" required>
       </div>

       <div>
           <label for="ccode">Country Code</label>
           <input type="text" id="ccode" name="ccode" required>
       </div>

       <div>
           <label for="phone">Phone Number</label>
           <input type="text" id="phone" name="phone" required>
       </div>

       <div>
           <label for="email">Email</label>
           <input type="email" id="email" name="email" required>
       </div>

       <div>
           <label for="status">Status</label>
           <input type="text" id="status" name="status" required>
       </div>

       <div>
           <label for="password">Password</label>
           <input type="password" id="password" name="password" required>
       </div>

       <div>
           <label for="password_confirmation">Confirm Password</label>
           <input type="password" id="password_confirmation" name="password_confirmation" required>
       </div>

       <div>
           <label for="user_dp">Profile Picture</label>
           <input type="file" id="user_dp" name="user_dp">
       </div>

       <div>
           <button type="submit">Register</button>
       </div>
   </form>