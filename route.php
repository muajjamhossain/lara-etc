<?php
Route::get('user-list',[UserController::class,'index'])->name('user.list');
Route::get('user-edit/{id}',[UserController::class,'edit'])->name('user.edit');
?> 

// Exampl 1 Simple route
<script>
  var url = "{{ route('user.list') }}";
</script>
// Exampl 2 pass a variable in route
<script>
  var url = "{{ route('user.edit', $id) }}";
  location.href = url;

  //or
  var id = "12";
  var url = "{{ route('user.edit', ':id') }}";
  url = url.replace(":id", id);
  location.href = url;
</script>
