<form action="{{ route('event.store') }}" method="get">
<table>
<tr>
<td><label>Title:</label></td>
<td><input type="text" name="title" placeholder="title" ></td>
</tr>
<tr>
<td><label>Description:</label></td>
<td><input type="text" name="description" id="description" placeholder="description" ></td>
</tr>
<tr>
<td><label>Place:</label></td>
<td><input type="text" name="place" id="place" placeholder="place" ></td>
</tr>
<td><label>Start date:</label></td>
<td><input type="text" name="start_date" id="start_date" placeholder="startdate" ></td>
</tr>
<td><label>End date:</label></td>
<td><input type="text" name="end_date" id="end_date" placeholder="end date" ></td>
</tr>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">Ajouter</button></td>
</tr>
</table>
</form>
