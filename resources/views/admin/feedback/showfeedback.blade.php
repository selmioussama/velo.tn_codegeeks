
<table border="1">
<thead>
<tr>
<th>Id</th>
<th>Description</th>
<th>date</th>
<th>event_id</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($listFeedbacks as $listFeedbacks)
<tr>
<td>{{ $listFeedbacks->id }}</td>
<td>{{ $listFeedbacks->description }}</td>
<td>{{ $listFeedbacks->created_at }}</td>
<td>{{ $listFeedbacks->event_id }}</td>
<td>
<form action="{{ route('feedback.delete', [$listFeedbacks->id]) }}" method="get">
       <button type="submit" class="btn btn-link">Supprimer</button>
</form>

<form action="{{ route('feedback.edit', [$listFeedbacks->id]) }}" method="get">
       <button type="submit" class="btn btn-link">Edite</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
