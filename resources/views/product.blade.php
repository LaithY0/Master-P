@extends('layout.master')



@section('title' , 'Products')
    

@section('body')

<style>
    body{
        background-color: black;
    }
</style>

<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Supplements</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Supplements</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<article id="productart">


    <section class="products">
          {{-- <h2 id="proh2">Supplement</h2> --}}
          <div class="all-products">
              <div class="product">
                  <img src="../img/pp.webp">
                  <div class="product-info">
                      <h4 class="product-title">Whey protein
                      </h4>
                      <p class="product-price">$129</p>
                      <a class="product-btn" href="#">Buy Now</a>
  
                  </div>
              </div>
              <div class="product">
                  <img src="../img/pp.webp">
                  <div class="product-info">
                      <h4 class="product-title">Whey protein
                      </h4>
                      <p class="product-price">$299</p>
                      <a class="product-btn" href="#">Buy Now</a>
  
                  </div>
              </div>
              <div class="product">
                  <img src="../img/pp.webp">
                  <div class="product-info">
                      <h4 class="product-title">Whey protein
                      </h4>
                      <p class="product-price">$999</p>
                      <a class="product-btn" href="#">Buy Now</a>
  
                  </div>
              </div>
              <div class="product">
                  <img src="../img/pp.webp">
                  <div class="product-info">
                      <h4 class="product-title">Whey protein
                          </h4>
                      <p class="product-price">$629*</p>
                      <a class="product-btn" href="#">Buy Now</a>
  
                  </div>
              </div>
          </div>
          
      </section>
  
    </article>

    


    @endsection