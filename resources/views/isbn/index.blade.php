<form action='/books' method="post">
  @csrf
  <input type="number" name="storage_id" id="storage_id" placeholder="storage">
  <input type="text" name="title" id="title" placeholder="title">
  <input type="number" name="isbn" id="isbn" placeholder="isbn">
  <input type="button" value="search" id="search">
  <input type="number" name="status" id="status" placeholder="status">
  <input type="submit" value="submit">
</form>
<script src="{{ asset('js/isbn.js') }}"></script>