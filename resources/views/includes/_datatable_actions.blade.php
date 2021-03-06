@if(@$showUrl)
<a href="{{$showUrl}}" class="btn btn-sm btn-default">{{trans('app.show')}}</a>
@endif
@if(@$editUrl)
<a href="{{$editUrl}}" class="btn btn-sm btn-default">{{trans('app.edit')}}</a>
@endif
@if(@$deleteUrl)
<a href="" data-href="{{$deleteUrl}}" data-method="DELETE" class="btn btn-sm btn-danger btn-action-to-confirm" data-toggle="modal" data-target="#confirm-modal">{{trans('app.delete')}}</a>
@endif
@if(@$downloadUrl)
<form  action="{{$downloadUrl}}" method="POST">
	{{ Form::token() }} 
	<button type="submit" class="btn btn-sm btn-primary">{{trans('app.download')}}</button>
</form>
@endif
@if(@$approveUrl)
<form  action="{{$approveUrl}}" method="POST">
	{{ Form::token() }} 
	<button type="submit" class="btn btn-sm btn-default">{{trans('app.approve')}}</button>
</form>
@endif
