fetch('scripts/books.json')
    .then(data => data.json())
    .then(books => {
        let output = '<h1>student material</h1>';
        books.forEach(function(material){
            output +=`
            <div class="container">
                <div class="box">
                    <ul>
                        <li>Subject: ${material.title}</li>
                        <li> Grade: ${material.grade}</li>
                        <div class="document"><iframe src="./books/${material.booklink}" type="application/pdf" frameborder="0"></iframe></div>
                        <a href="./books/${material.booklink}"><input type="submit" value="Open"></a>       
                    </ul>
                </div>
            </div>
            `;
        });
        document.getElementById('output').innerHTML = output;
    });
