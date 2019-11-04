@extends('layouts.posts')
@section('title','Create new post')
@section('content')
    <h1>Create new Post</h1>
<form action=" {{ route('post.store') }} " method="POST" enctype="multipart/form-data">
    @csrf
<input type="text" name="title"><br>
@error('title')
<p>{{ message }}</p>
@enderror
<textarea name="content" id="content" cols="30" rows="10" {{ old('content') }}></textarea><br>
@error('content')
<p>{{ message }}</p>
@enderror
<input type="file" name="photo" id="photo"> <br>
@error('photo')
<p>{{ message }}</p>
@enderror
<label for="">Computer</label> <input type="checkbox" name="computer" id="computer"><br>
@error('computer')
<p>{{ message }}</p>
@enderror
<br>
<label for="">TOS</label> <input type="checkbox" name="tos" id=""><br>
@error('tos')
<p>{{ message }}</p>
@enderror
<input type="submit" value="Add new post">
</form>
@endsection
