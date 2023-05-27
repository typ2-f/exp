<ul>
  <li>user:{{ $book->user->name }}</li>
  <li>titile:{{ $book->title }}</li>
  <li>isbn:{{ $book->isbn }}</li>
</ul>




<a href='/books/{{ $book->id }}/edit'><button>edit</button></a>
