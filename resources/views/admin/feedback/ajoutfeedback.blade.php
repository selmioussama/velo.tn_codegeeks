<form action="{{ route('feedback.store') }}" method="get">
<table>
<tr>

<tr>
<td><label>Description:</label></td>
<td><input type="text" name="description" id="description" placeholder="description" ></td>
</tr>
<td><label>Event_id:</label></td>
<td><input type="text" name="event_id" id="event_id" placeholder="Event_id" ></td>
</tr>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
</tr>
</table>
</form>
