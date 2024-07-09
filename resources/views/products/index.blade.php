@extends('layouts.app')
@section('content')
    
<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-12">
            <div id="response_message"></div>
            <div class="card">
                <div class="card-header">
                   
                        <div class="row">
                            <div class="col-md-2 d-flex  align-items-center">
                                <h5>Products</h5>    
                            </div>
                            <div class="col-md-5 mx-auto">
                                
                                
                                <div class="input-group">
                                    <input class="form-control border rounded-pill" type="text" placeholder="search" id="search">
                                </div>
                            </div>
                            <div class="col-md-3 text-md-end mt-2 mt-md-1">
                                <a class="btn btn-sm btn-success" href="{{ route('product.create') }}">Add New</a>
                            </div>
                            
                        </div>
                       
                   
                </div>
                <div class="card-body">
                    <div id="response_message"></div>
                    @if (session()->has('message'))
                        <script>
                            toastr.options = {
                            closeButton: true,
                            progressBar: true,
                            positionClass: 'toast-bottom-right' 
                        }; 
                        toastr.success("{{session()->get('message')}}")</script>
                    @endif
                    @if (session()->has('error'))
                       <script> 
                       toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        positionClass: 'toast-bottom-right' 
                    }; toastr.error("{{session()->get('error')}}")</script>
                      @endif
                    <table class="table table-sm table-striped table-bordered hover" id="myDataTable">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 5%;" >#</th>
                            <th scope="col">Name</th>
                          </tr>
                        </thead>
                        <tbody id="tbody">
                            @if ($products->isEmpty())
                            <tr><td colspan="6" class="text-center">No records found</td></tr>
                        @else
                            
                       
                      @foreach ($products as $product)
                      <tr>
                         <td class="align-middle">{{$loop->iteration }}</td>
                         <td class="align-middle">{{$product->product_name}}</td>
                       </tr>
                      @endforeach
                      @endif
                       
                        </tbody>
                      </table>          
                </div>
            </div>
        </div>
    </div>
</div> 
<script>
    $(document).ready(function(){
    $('#search').on('keyup', function(){
        var query = $(this).val();
        $.ajax({
            url: "{{ route('product.search') }}",
            type: "GET",
            data: {'query': query},
            success: function(response){
                console.log(response.products.length);
                $('#tbody').html("");
                if(response.products.length > 0){
                    $.each(response.products,function(key, item){
                        $('#tbody').append(
                                '<tr>\
                                        <td class="align-middle" >'+(key+1)+'</td>\
                                        <td class="align-middle">'+item.product_name+'</td>\
                                    </tr>'

                            );
                    });
                }else{
                    $('#tbody').append("<tr><td colspan=2 class='text-center' >No Record Found</td></tr>");
                }
            },
            error:function(err) {
                 console.log(err);
            }
        });
    });
});

    </script>
@endsection