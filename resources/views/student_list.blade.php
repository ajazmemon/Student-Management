@extends('layouts.app')
@section('content')
<div class="container">
    <div>
        <a href="{{route('students')}}" class="btn btn-primary" style="margin-bottom: 10px;">Create</a>
    </div>
	<table class="table table-responsive">
		<thead>
			<tr>
				<th>Roll Number</th>
				<th>First_Name</th>
				<th>Last Name</th>
				<th>Date Of Birth</th>
				<th>Gender</th>
                                <th>Class</th>
				<th>Image</th>
				<th style="text-align: center;">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $s)
			<tr>
					<td><?=$s->roll_no?></td>
					<td><?=$s->first_name?></td>
					<td><?=$s->last_name?></td>
					<td><?=$s->dob?></td>
                                        <td><?=$s->gender?></td>
                                        <td><?=$s->class?></td>
                                        <td><img src= {{ asset('img/'.$s->image) }} alt="Card image cap" height="50px;" width="30px;"></td>
					<td style="text-align: center;"><a href="{{route('edit',$s->id)}}"><span class="btn btn-primary">Edit  </span></a> | <a  data-id="{{$s->id}}" class="delete_row"><span class="btn btn-danger">Delete</span></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function(){
	$('.table').on('click','.delete_row', function(){
		var id = $(this).attr('data-id');
		$(this).closest('tr').remove();
		$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $.ajax(
    	{
        url: "delete/"+id,
        type: 'get', // replaced from put
        dataType: "JSON",
        success: function (response)
        {
            console.log(response); // see the reponse sent
        },
        error: function(xhr) {
         console.log(xhr.responseText); // this line will save you tons of hours while debugging
        // do something here because of error
       }
    });

});
	
});
</script>
@endsection