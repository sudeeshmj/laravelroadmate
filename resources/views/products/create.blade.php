@extends('layouts.app')
@section('content')
    
<style>
  
</style>
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-12">
            <div id="response_message"></div>
            <div class="card">
                <div class="card-header">
                    <h5>Add New Product
                        
                        <a class="btn btn-sm btn-info float-end" href="{{ route('products.index') }}">Back</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form method="post"  id="productForm" action="{{route('product.store')}}">
                        @csrf
                        <div class="mb-3">
                          <label for="product_name" class="form-label">Name <span style="color: red">*</span></label>
                          <input type="text" class="form-control" id="product_name" name="product_name" value="{{old('product_name')}}">
                          @error('product_name')
                          <span class="error-message">{{ $message }}</span>
                          @enderror
                        </div>   
                       <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-sm" >Submit</button>
                     </div>
                     
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $("#productForm").validate({
        rules: {
            product_name: {
                    required: true,
                    minlength: 2,
                    maxlength:150,
                },   
            },
            messages: {
                product_name: {
                    required: "Please Enter Product Name."
                },            
               
               
            },

            });
        });
</script>
@endsection