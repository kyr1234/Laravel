{{-- <h1>HELLO {{$name}}</h1>
<h1>Your Age is {{$age}}</h1> --}}

@include("about")

@include("header")


{{-- @foreach($users as $item)
  <h3>{{ $item }}</h3>
@endoforeach --}}

@include("footer")
{{-- <!---Generates a token for user auth>
  @csrf_token(); --}}


{{-- <script>
let data=@json($data);
console.log(data);
</script> --}}
