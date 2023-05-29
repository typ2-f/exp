<h1>create</h1>
<form action='/books' method="post">
  @csrf
  <input type="number" name="storage_id" id="storage_id" placeholder="storage">
  <input type="text" name="title" id="title" placeholder="title">
  <input type="number" name="isbn" id="isbn" placeholder="isbn">
  <input type="number" name="status" id="status" placeholder="status">
  <input type="submit" value="submit">
</form>