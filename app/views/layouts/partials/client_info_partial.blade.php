<?php use Carbon\Carbon; ?>

<tr class='clickableRow' data-url="/clients/{{$client->getId()}}">
	<td>{{ $client->getName() }}</td>
	<td>{{ $client->type->tipus }}</td>
	<td>{{ $client->getContactName() }}</td>
	<td>{{ $client->getFamilyName() }}</td>
	<td>{{ $client->getEmail1() }}</td>
	<td>{{ $client->getPhone1() }}</td>
	{{--<td>{{ $client->getAddress() }}</td>--}}
	<td>{{ $client->getLocation() }}</td>
	{{--<td>{{ $client->getRef() }}</td>--}}
	{{--<td>{{ $client->sector->sector }}</td>--}}
	@if ($client->getLastContact() == Carbon::parse('0000-00-00 00:00:00'))
		<td> Mai </td>
	@else
		<td> {{ $client->getLastContact() }}</td>
	@endif
	
	@if ($client->getLastContract() == Carbon::parse('0000-00-00 00:00:00'))
		<td> Mai </td>
	@else
		<td>{{ $client->getLastContract() }}</td>
	@endif
</tr>