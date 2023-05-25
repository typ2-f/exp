<div>{{ $book->title }}</div>
<div>
    <form method="post" action="/books/{{ $book->id }}">
        @csrf
        <input type="text" name="title" id="title" value={{ $book->title }}>
        <input type="number" name="isbn" id="isbn" value={{ $book->isbn }}>
        <input type="hidden" name="_method" value="PATCH">
        <input type="submit" value="edit">
    </form>
</div>

<div>
    <form method="post" action="/books/{{ $book->id }}">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="delete!!">
    </form>
</div>
