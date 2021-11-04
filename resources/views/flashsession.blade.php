<h1>Flash Session</h1>
@if (session('user'))
<h3 style="color: green">{{session('user')}} HAVE LOG IN SUCCESSFULLY</h3>   
@endif
<form method="POST" action="flashsession">
    @csrf
<input  type="text" placeholder="Enter Your Name" class="name" name="user">
<input  type="email" placeholder="Enter Your Email" class="email" name="Email">
<input  type="password" placeholder="Enter Your Password" class="password" name="password">
<button class="button" >Add Member</button>
</form>
{{-- savefromwebextension
vidmat --}}