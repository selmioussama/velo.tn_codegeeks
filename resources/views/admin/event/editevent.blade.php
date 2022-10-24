<form action="{{ route('event.update' , $event->id) }}" method="get">
<table>
<tr>
<td><label>Edit Title:</label></td>
<td><input type="text" name="title" placeholder="title" value="{{ $event->title}}" ></td>
</tr>
<tr>
<td><label>Edit Description:</label></td>
<td><input type="text" name="description" id="description" placeholder="description" value="{{ $event->description}}" ></td>
</tr>
<tr>
<td><label>Edit Place:</label></td>
<td><input type="text" name="place" id="place" placeholder="place" value="{{ $event->place}}" ></td>
</tr>
<td><label>Edit Start date:</label></td>
<td><input type="text" name="start_date" id="start_date" placeholder="startdate" value="{{ $event->start_date}}" ></td>
</tr>
<td><label>End date:</label></td>
<td><input type="text" name="end_date" id="end_date" placeholder="end date" value="{{ $event->end_date}}" ></td>
</tr>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">update</button></td>
</tr>
</table>
</form>
