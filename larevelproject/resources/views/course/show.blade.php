

	<table>
			<tr>
			<th>No</th><th>Message</th>
			</tr>
			@foreach ($alldata as $data)
			<tr>
			<td>{{$data->id}}</td><td>{{$data->course_title}}</td><td>{{$data->course_code}}</td><td>{{$data->imag}}</td>
			</tr>
			{!!Html::image("$data->imag","a")!!}
			@endforeach
	</table>
	