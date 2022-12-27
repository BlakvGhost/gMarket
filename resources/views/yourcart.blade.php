@extends('base.index')
@section('title')
    Your Cart Content(8)
@endsection
@section('content')
<div class="row row-cols-2">
    <div class="text-dark">
        <h5 class="link fw-bold">Your Shopping Cart</h5>
    </div>
    <div class="text-end">
        <a href="{{ url('/') }}" class="link mx-2"><i class="mdi mdi-home-outline"></i></a>
        <span><i class="mdi mdi-chevron-right"></i></span>
        <a href="javascript:void(0)" class="link mx-2">Your Shopping Cart</a>
    </div>
</div>
<div class="my-3 link p-3 rounded-3">
    <div class="text-dark mb-3">
        <h5 class="fw-bold">Your Cart</h5>
    </div>
    <table class="table table-light table-bordered rounded">
        <thead>
            <tr>
                <th>Remove</th>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="tvble" data-pb-storage="cart">
            
        </tbody>
    </table>
    <div class="text-end my-3">
        <small><strong class="text-danger">Subtotal: </strong> <strong id="totalPrice"></strong> FCFA</small>
    </div>
    <form action="" method="post" class="d-flex justify-content-between">
        <div class="form-group">
            <label for="forseller" class="form-text">Special Instruction For Seller</label>
            <textarea name="forseller" id="" cols="30" rows="4" class="form-control"></textarea>
        </div>
        <div class="py-2">
            <div class="text-end my-3">
                <small>Shipping, Taxes and discount will be calculated at checkout</small>
            </div>
            <div class="text-end">
                <a href="{{ route('shipping') }}" class="btn btn-dark">CheckOut</a>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
    <script>
        Utils.AsyncPageTable = function(elt) {
            return `
                    <tr data-ar-price="${elt.price}" data-ar-totalPrice="${elt.price * elt.quantity}">
                        <td class="align-middle text-center text-muted"><button class="btn btn-danger delCartItem" data-pb-storage="cart" data-ar-id="${elt.id}"><i class="mdi mdi-trash-can-outline"></i></button></td>
                        <td style="width: 150px; height: 110px;" class="p-0 text-muted"><img src="${elt.img}" alt="" class="full"></td>
                        <td class="align-middle text-center text-muted">${elt.libele}</td>
                        <td class="align-middle text-center text-muted">${elt.price} FCFA</td>
                        <td class="align-middle text-center text-muted" style="width: 50px;"><input type="number" name="quantity" value="${elt.quantity}" class="form-control text-center quantity" min="1"></td>
                        <td class="align-middle text-center text-muted"><small id="trPriceTotal">${elt.price * elt.quantity}</small> FCFA</td>
                    </tr>
                `
        }
    </script>
@endsection