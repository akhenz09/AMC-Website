@extends('layoutitem')
@section('contentitem')

<div id="intro" class="bg-image shadow-2-strong">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
<div class="container p-5 my-5 border col-md-3">
	<form action="{{ route('itemRecords.updateItem',$itemdetails['id'])}}" method="post" accept-charset="utf-8">
		@csrf
		<h1 class="text-info" style="text-align:center;">UPDATE</h1>
		<div>
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Name</label>
			<input class="form-control"  type="text" name="txtItemName" value="{{ $itemdetails['ItemName'] }}" required="">
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Description</label>
			<textarea class="form-control" name="txtDescription">{{ $itemdetails['Description'] }}</textarea>
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Subscription Plan</label>
			<input class="form-control"  type="number" name="txtAmount" value="{{ $itemdetails['Amount'] }}" step=".01" min="0" required="">
			<label class="col-md-12 text-muted" style="padding: 10px;padding-left: 0px;">Item Stocks</label>
			<input class="form-control"  type="number" name="txtStocks" value="{{ $itemdetails['Stocks'] }}" min="0" required="">
			<div style="text-align:center;padding: 10px;padding-right: 0px;">
				<a href="{{ route('items') }}">
					<button type="button" class="btn btm-danger">CANCEL</button>
				</a>
					<button type="submit" class="btn btn-primary">UPDATE</button>
			</div>
			<div class="text-white">
			</div>
		</div>
		</div>
	</form>
</div>
@endsection