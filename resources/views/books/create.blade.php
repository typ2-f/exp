<h1>create</h1>
<form action='/books' method="post">
  @csrf
  <input type="text" name="title" id="title">
  <input type="number" name="isbn" id="isbn">
  <input type="submit" value="submit">
</form>