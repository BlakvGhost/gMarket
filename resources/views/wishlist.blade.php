@extends('base.index')
@section('title')
    Your Wishlist Content(8)
@endsection
@section('content')
<div class="row row-cols-2">
    <div class="text-dark">
        <h5 class="link fw-bold">Your Wishlist</h5>
    </div>
    <div class="text-end">
        <a href="{{ url('/') }}" class="link mx-2"><i class="mdi mdi-home-outline"></i></a>
        <span><i class="mdi mdi-chevron-right"></i></span>
        <a href="javascript:void(0)" class="link mx-2">Wishlist</a>
    </div>
</div>
<div class="my-3 link p-3 rounded-3">
    <table class="table table-light table-bordered rounded">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Stock Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="tvble" data-pb-storage="wishlist">
            
        </tbody>
    </table>
</div>
@endsection

@section('script')
    <script>
        Utils.AsyncPageTable = function(elt) {
            return `
                <tr data-ar-price="${elt.price}" data-ar-totalPrice="${elt.price * elt.quantity}">
                    <td class="align-middle text-center text-muted"><button class="btn btn-danger delCartItem" data-pb-storage="wishlist" data-ar-id="${elt.id}"><i class="mdi mdi-trash-can-outline"></i></button></td>
                    <td style="width: 150px; height: 110px;" class="p-0 text-muted"><img src="${elt.img}" alt="" class="full"></td>
                    <td class="align-middle text-center text-muted">${elt.libele}</td>
                    <td class="align-middle text-center text-muted" id="trPriceTotal">${elt.price} FCFA</td>
                    <td class="align-middle text-center text-muted">${elt.inStock || 'Expired'}</td>
                    <td class="align-middle text-center text-muted"><a href="/product/${elt.id}/${elt.libele}" class="btn btn-dark">View Product</a></td>
                </tr>
                `
        }
    </script>
@endsection