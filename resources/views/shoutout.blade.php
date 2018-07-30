
	<h1> SHOUTOUT TO: {{$text}} </h1>

@if($text=="gwapo")
<h1> Gwapo </h1>?
@elseif($text=="gwapa")
<h1> Gwapa </h1>
@endif

@foreach($colors as $color => $description)

<table width="20%" border="1px">
  <tr> 
  	<th> Color </th>
  	<th> Description </th>
<tr>
<td> {{$color}} </td>
<td> {{$description}} </td>
 </tr> 
</table>
@endforeach
