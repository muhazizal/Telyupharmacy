$(document).ready( () => {
  getArticle();
});

const baseURL = window.location.origin + '/Telyupharmacy/';

const getArticle = () => {
  fetch(`${baseURL}Article/showAllArticle`)
    .then(response => {
      response.json();
    })
    .then(responseJson => {
      renderArticle(responseJson);
    })
    .catch(console.log('error'));
};

const renderArticle = (articles) => {
  const articleElement = document.querySelector('#section1');
  articleElement.innerHTML = '';
  
  articles.forEach(article => {
    articleElement.innerHTML += `
      <div class="row text-left article">
        <div class="col-lg-3">
          <img id="article-photo" src="${baseURL}assets/uploads/product/${article.image}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-9">
          <h1 id="arttittle">${article.title}<h1>
          <h3 id="article">${article.description}</h3>
          <h2 id="category">${article.category}</h2>
          <a href="${baseURL}Article/showDetailArticle/${article.id}"class="btn btn-large btn-info mt-3 text-white">
            Read Article Detail
          </a>
        </div>
      </div>
    `
  });
};