<div class="isbnblock">
  <p class="isbncomment">ISBNを入力してください。</p>
  <input id="isbn" type="text" name="isbn" value="" autofocus> <button id="getBookInfo" class="btn btn-default">書籍情報を取得</button>
</div>
<div id="bookInfo">
  <div class="bookImageBlock">
    <div class="bookImageInner">
      <img src="" id="thumbnail">
    </div>
  </div>
  <p>書籍名：<span id="booktitle"></span></p>
  <p>出版社：<span id="publisher"></span></p>
  <p>巻：<span id="volume"></span></p>
  <p>シリーズ：<span id="series"></span></p>
  <p>作者：<span id="author"></span></p>
  <p>出版日：<span id="pubdate"></span></p>
  <p>詳細：<span id="description"></span></p>
</div>
<script src="{{ asset('js/isbn.js') }}"></script>