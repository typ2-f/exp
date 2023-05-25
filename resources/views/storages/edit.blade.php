{{$book->title}}
<form method="post" action="/storages/{{$storage->id}}">
  @csrf
    <input type="text" name="name" id="name">
    <input type="text" name="address" id="address">
    <input type="hidden" name="_method" value="PATCH">
    <input type="submit" value="update!!">
</form>
<form method="post" action="/books/{{$book->id}}">
  @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete!!">
</form>