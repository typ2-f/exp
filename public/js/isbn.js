document.getElementById("getBookInfo").addEventListener("click", () => {
    // isbnに入力された値を取得
    var userInput = document.getElementById("isbn").value;
    var query = userInput.split(" ").join("+");
    // APIを取得
    const url = "https://api.openbd.jp/v1/get?isbn=" + query + "&pretty";

    // json
    fetch(url)
        .then((response) => {
            return response.json();
        })
        .then((data) => {
                // サムネイル
                const bookImg = document.getElementById("thumbnail");
                const bookImgSrc = data[0].summary.cover;
                console.log(bookImgSrc);
                bookImg.setAttribute("src", bookImgSrc);
                //書籍名
                document.getElementById("booktitle").innerHTML =
                    data[0].summary.title;
                //出版社
                document.getElementById("publisher").innerHTML =
                    data[0].summary.publisher;
                //巻
                document.getElementById("volume").innerHTML =
                    data[0].summary.volume;
                //シリーズ
                document.getElementById("series").innerHTML =
                    data[0].summary.series;
                //作者
                document.getElementById("author").innerHTML =
                    data[0].summary.author;
                //出版日
                document.getElementById("pubdate").innerHTML =
                    data[0].summary.pubdate;
                //詳細
                document.getElementById("description").innerHTML =
                    data[0].onix.CollateralDetail.TextContent[0].Text;
            
            // 情報エリアの表示
            document.getElementById("bookInfo").classList.add("show");
        })
        .catch((err) => {
            console.log("Error: " + err);
        });
});
