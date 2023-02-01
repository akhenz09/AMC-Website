@extends('layoutitem')
@section('contentitem')

<h1 class="text-info" style="text-align:center;">ENROLEE RECORDS PAGE</h1>
@if($message = Session::get('success'))
<div class="alert alert-success" style="text-align:center;">
  <strong>{{$message}}</strong>
</div>
{{ Session::forget('success') }}
@endif
<a href="{{ route('newItem')}}">
<button class="btn btn-info" style="margin: 10px; margin-left: 0px;">New Enrollee</button>
</a>
<table class="table table-dark table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>BATCH</th>
			<th>PLAN</th>
			<th>TEST</th>
			<th colspan="2" style="text-align:center;">ACTIONS</th>
		</tr>
	</thead>
<tbody>
@if ($listitems->count()==0)
			<tr>
				<td colspan="7">
					<div class="alert alert-info" style="text-align:center;">
  					<strong>No Subscription Plan Found!</strong>
  					</div>
				</td>
			</tr>
@else
	@foreach($listitems as $listitem)
		<tr>
			<td>{{$listitem->id}}</td>
			<td>{{$listitem->ItemName}}</td>
			<td>{{$listitem->Description}}</td>
			<td>{{$listitem->Amount}}</td>
			<td>{{$listitem->Stocks}}</td>
			<td style="text-align:center;">
				<a href="{{ route('itemRecords.editItem',$listitem->id) }}">
				<button class="btn btn-info" ><span class="fa fa-edit" data-bs-toggle="tooltip" title="EDIT"></span></button>
				</a>
			</td>
			<td style="text-align:center;">
				<a href="{{ route('itemRecords.deleteItem',$listitem->id) }}">
				<button class="btn btn-info"><span class="fa fa-trash" data-bs-toggle="tooltip" title="DELETE"></span></button>
			</a>
		</td>
	@endforeach
@endif
	</tbody>
</table>

@endsection
