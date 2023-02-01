@extends('layoutitem')
@section('contentitem')

<div class="container p-5 my-5 border col-md-3">
	<form action="{{ route('saveItem')}}" method="POST" accept-charset="utf-8">
		@csrf
		<h1 class="text-info" style="text-align:center;">NEW</h1>
		<div>
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Name</label>
			<input class="col-md-12 form-control"  type="text" name="txtItemName" required="">
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Description</label>
			<textarea class="form-control" name="txtDescription"></textarea>
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Subcription Plan</label>
			<input class="col-md-12 form-control"  type="number" name="txtAmount" step=".01" min="0" required="">
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Item Stocks</label>
			<input class="col-md-12 form-control"  type="number" name="txtStocks" min="0" required="">
			<div style="text-align:center;padding: 10px;padding-right: 0px;">
				<a href="{{ route('items') }}">
					<button type="button" class="btn btm-danger">CANCEL</button>
				</a>
					<button type="submit" class="btn btn-primary">ADD ENROLLEE</button>
			</div>
		</div>
	</form>
</div>
@endsection