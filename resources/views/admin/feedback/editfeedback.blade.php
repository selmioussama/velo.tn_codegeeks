<form action="{{ route('feedback.update' , $feedback->id) }}" method="get">
<table>
<tr>
<td><label>Edit feedback:</label></td>
<td><input type="text" name="description" placeholder="description" value="{{ $feedback->description}}" ></td>
</tr>
<tr>
<td clospan="2"><button type="submit" class="btn btn-secondary">update</button></td>
</tr>
</table>
</form>
