
{{$book->title}}
<form method="post" action="/books/{{$book->id}}">
  @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="delete!!">
</form>