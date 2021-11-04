<h3>Login Auth Session</h3>
<form method="POST" action="loginSession">
    @csrf
<input type="text" placeholder="Enter Your Name" class="name" name="user">
<input type="password" placeholder="Enter Your Password" class="password" name="password">
<button class="button" >Login</button>

</form>