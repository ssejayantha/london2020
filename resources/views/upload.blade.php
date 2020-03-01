@extends('layouts.admin')

@section('content')
<h2>Upload File</h2>
<form action="" method="">
  <div class="form-group">
    <label for="file">File:</label>
    <input type="file" class="form-control" placeholder="Enter email" name="file">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection