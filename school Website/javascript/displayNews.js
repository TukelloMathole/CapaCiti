fetch('news.json')
    .then(data => data.json())
    .then(newsupdat => console.log(newsupdat));