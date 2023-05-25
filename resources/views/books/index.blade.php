<a href='books/create'>create</a>
<ul>
    @foreach ($books as $book)
        <a href='/books/{{$book->id}}'>
            <li>{{ $book->isbn }}</li>
            <li>{{ $book->title }}</li>
        </a>
    @endforeach
</ul>
