@extends('layouts.frontend.app')

@section('content')

<section id="content">
      
    
    <!-- about -->
        <section class="products sec-padding">
            <div class="container">
       
                <div class="row m-t-30">
                    
                    <div class="col-md-3">
                            <aside class="simple-shadow" style="position: sticky; top: 30px; padding: 15px">
                                <h4 class="m-b-20"> Producs Filters </h4>
                                <form action="{{ route('frontend.products.index') }}" method="GET">
                                    @foreach ($categories as $category)
                                    <div class="check p-l-25 m-b-10">
                                        <input class="form-check-input" name="category_ids[]" type="checkbox" {{ (isset(request()->category_ids) && in_array($category->id, request()->category_ids)) ? 'checked' : '' }} value="{{$category->id}}" id="Check-{{$category->id}}" style="margin-left: 0">
                                        <label class="form-check-label" for="Check-{{$category->id}}">
                                          {{ $category->name }}
                                        </label>
                                      </div>                                        
                                    @endforeach 
                                    <button class="btn btn-danger d-block m-t-15 w-100">Search</button>
                                </form>
                            </aside> 
                            
                        
                    </div>
                    
                    <div class="col-md-9"> 
                        
                        <div class="row">
                            
                            @foreach ($products as $product)
                            <div class="col-md-4 col-sm-6 col-12">
                                <div class="product simple-shadow p-2 hoverZoom">
                                    <figure>
                                        <img src="{{$product->product_images->first()->image_path}}" class="w-100" alt="">
                                    </figure>
                                    <div class="data" style="height: 72px">
                                        <h4>{{$product->name}} </h4>
                                        <h5 class="m-t-15  m-b-30" ><b>Price :</b>{{$product->price}} EGP</h5>
                                        <a href="{{ route('frontend.products.show',$product) }}" class="btn btn-danger pull-right">Read More</a>
                                    </div>
                                </div>
                            </div>                               
                            @endforeach

                            
                        </div>
                    
                    </div>
                    
                </div>
                
            </div>
        </section>
    <!-- #END# about -->
    
 
</section>



@endsection
