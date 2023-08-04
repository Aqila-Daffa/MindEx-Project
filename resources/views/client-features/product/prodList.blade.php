@extends('client-features.layout.main-user')
@section('contents')
<style>
.zoom {
  transition: transform .2s;
}

.zoom:hover {
  transform: scale(1.07);
}
</style>
<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <div class="section-title" data-aos="fade-up">
          <p>Products</p>
    </div>

    <div class="row">
    @foreach($prod as $product)
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <a href="/product-detail?name={{ $product['name'] }}" class="ProdName">
                <img src="https://www.qsrmagazine.com/sites/default/files/styles/story_page/public/story/pizza-hut-turns-comeback-expert_0.jpg?itok=H7tqkA3B" class="zoom w-100" />
            </a>
            <a href="#!">             
              <div class="hover-overlay">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </div>
            </a>
          </div>
          <div class="card-body">
          <div class="mask">
                <div class="d-sm-flex justify-content-between align-items-center">
                  <h5 class="h-100"><span class="badge bg-danger ms-2">Limited Edition</span></h5>
                  <h5 class="h-100"><span class="badge bg-success ms-2">In Stock: {{ $product['quantity'] }}</span></h5>
                </div>
          </div>
            <a href="/product-detail?name={{ $product['name'] }}">
              <h4 class="nm card-title mb-1 mt-3"><strong>{{ $product['name'] }}</strong></h4>
            </a>
            <h5 class="p-2 mb-3">RM {{ $product['price'] }}</h5>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection