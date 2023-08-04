@extends('client-features.layout.main-user')
@section('contents')
@foreach($pDetail as $product)
<section>
<div class="container h-100 mt-5 mb-5">
    <div class="section-title" data-aos="fade-up">
          <p>Product Details</p>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ session('success') }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card" style="margin-bottom: 50px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images">
                            <div class="text-center p-1"> <img id="main-image" src="https://www.qsrmagazine.com/sites/default/files/styles/story_page/public/story/pizza-hut-turns-comeback-expert_0.jpg?itok=H7tqkA3B" width="100%" height="100%" /> </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-3">
                            <a href="/cake-product"class="btn btn-outline-danger">Back</a>
                            
                            <form action="" method="post">
                                @csrf
                            <div class="mb-2 d-sm-flex justify-content-between align-items-center"> 
                                <span class="mt-2 text-uppercase text-muted brand">Product Details</span>
                                <h5 class="h-100"><span class="badge bg-success ms-2">In Stock: {{ $product['quantity'] }}</span></h5>
                            </div>
                            <div class="mb-3"> 
                                <h4 class="text-uppercase mt-1" name="menuName" id="menuName">{{ $product['name'] }}</h4>
                            </div>
                            <div class="mb-2"> 
                                <h5>RM {{ $product['price'] }}</h5>
                            </div>
                            <div class="mb-2"> 
                                <h6>{{ $product['description'] }}</h6>
                            </div>    
                            <div class="d-sm-flex justify-content-start sizes mt-3">
                                <h6 class="text-uppercase me-2">Notes</h6>
                                <textarea name="notes" class="me-5" id="notes" cols="15" rows="1" maxlength="999" required></textarea>
                                <h6 class="text-uppercase me-2">Quantity</h6>
                                <input type="number" name="quantity" id="quantity" value="1" min="1" max="999">
                            </div>
                            <div class="cart mt-4 align-items-center"> <button type="submit" class="btn btn-dark border border-light text-uppercase mr-2 px-4">Add to cart</button> </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endforeach 
@endsection