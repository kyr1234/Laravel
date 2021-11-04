
{{-- THIS IS USED TO PUT THE DYNAMIC API DATA TO HTML --}}

<table>
    @foreach ($collection as $item )        
    <tr>
        <td>$item['id']</td>
        <td>$item['name']</td>
        <td>$item['email']</td>
    </tr>
    @endforeach

</table>