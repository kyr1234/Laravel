<h1>User Login</h1>
<div>
 {{--  @if ($errors->any())
  @foreach ($errors->all() as  $err)
    <h3>{{$err}}</h3>
  @endforeach
    
  @endif --}}
  <form action="users" method="POST">
  @csrf
    <input type="text" name="Username" placeholder="Enter Your Username" ><br>
      <span>@error('Username'){{ $message }}@enderror</span>
  
    <input type="text" placeholder="Password" name="Password" >
      <span>@error('Password'){{ $messa }}@enderror</span>
  </form>
</div>
