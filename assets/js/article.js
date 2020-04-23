$(document).ready( () => {
  loadData();
});

const loadData = () => {
  const baseURL = window.location.origin + '/Telyupharmacy/';
  $.ajax({
    type: 'get',
    url: `${baseURL}Article/searchArticleBuyer`,
    dataType: 'json',
    success: (data) => {
      let data = '';
      $.each(data, (key, value) => {
        data += `
          <div class="row text-left article">
            <div class="col-lg-3">
              <img id="article-photo" src="<?= base_url("assets/uploads/product/") . $article['image']; ?>" alt="" class="img-fluid">
            </div>
            <div class="col-lg-9">
              <h1 id="arttittle"><?php echo $article['title'] ?><h1>
              <h3 id="article"><?php echo $article['description'] ?></h3>
              <h2 id="category"><?php echo $article['category'] ?></h2>
              <a href="<?= site_url('Article/showDetailArticle/'.$article['id']); ?>" 
                class="btn btn-large btn-info mt-3 text-white">Read Article Detail
              </a>
            </div>
          </div>
        `;
      });
    }
  })
}