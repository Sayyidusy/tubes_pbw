{{-- approve transaction --}}
<a class="btn btn-success btn-edit" href="{{ 'user/'.$user->id.'/edit' }}" data-id="{{ $user->id }}">Approve</a>
<a class="btn btn-danger btn-delete" href="{{ 'user/'.$user->id }}">Un Approve</a>