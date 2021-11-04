<h1>LIST OF CUSTOMERS</h1>
<table>
@foreach ($data as $item )
    <tr>
        <td>{{$item['id']  }}</td>
        <td>{{$item['name']  }}</td>
        <td>{{$item['email']  }}</td>
{{--      <td><a href={{"delete/$item['id'] "}}</a></td>
 --}}
     <td><a href={{"update/$item['id'] "}}</a></td>

</tr>

@endforeach
</table>
<span>{{$data->links()  }}</span>