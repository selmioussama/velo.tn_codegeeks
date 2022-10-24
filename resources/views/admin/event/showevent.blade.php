<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
<th>place</th>
<th>Start date</th>
<th>End Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($listEvents as $listEvents)
<tr>
<td>{{ $listEvents->id }}</td>
<td>{{ $listEvents->title }}</td>
<td>{{ $listEvents->description }}</td>
<td>{{ $listEvents->place }}</td>
<td>{{ $listEvents->start_date }}</td>
<td>{{ $listEvents->end_date }}</td>
<td>{{ $listEvents->created_at }}</td>
<td>
<form action="{{ route('event.delete', [$listEvents->id]) }}" method="get">
       <button type="submit" class="btn btn-link">Supprimer</button>
</form>
<form action="{{ route('event.edit', [$listEvents->id]) }}" method="get">
       <button type="submit" class="btn btn-link">Edite</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
