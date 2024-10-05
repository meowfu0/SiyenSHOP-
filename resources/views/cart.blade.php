@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
<div class="container mt-5">
    <div class="d-flex align-items-center mb-4"> 
        <img src="{{ asset('images/cart.svg') }}" class="cart-logo mb-2">  
        <h1 class="ms-1 text-primary">Cart</h1>
    </div>

    <!-- Header for table (aligned with spans) -->
    <!-- Table for shirts -->
    <div class="border rounded mt-2"> 
        <table class="table table-borderless rounded">
            <tbody>
                <tr> 
                <div class="d-flex align-items-center mt-3 cart-header">
                      <div class="item-header"><b>Item</b></div>
                      <div class="unit-price-header"><b>Unit Price</b></div>
                      <div class="size-header"><b>Size</b></div>
                      <div class="quantity-header"><b>Quantity</b></div>
                      <div class="total-header"><b>Total</b></div>
                    </div>

                    <td><input type="checkbox" style="width: 20px; height: 30px;"></td>
                    <td ><img src="{{ asset('images/sample-shirt.jpg') }}" class="cart-item"></td> 
                    <td><span>CIRCUITS T-Shirt (CODE BLOODED) - Black</span></td> 
                    <td>₱150.00</td>
                    <td>
                        <select class="form-select w-10 border border-primary">
                              <option selected>Large</option>
                              <option>Medium</option>
                              <option>Small</option>
                              <option>X-Large</option>
                        </select>
                        </td>
                    <td>
                        <div class="input-group">
                            <button class="btn btn-outline-primary" type="button">-</button>
                            <input type="text" class="form-control btn btn-outline-primary" readonly value="1" style="width: 50px;">
                            <button class="btn btn-outline-primary" type="button">+</button>
                        </div>
                    </td>
                    <td>₱150.00</td>
                    <td><img src="{{ asset('images/delete.svg') }}" class="cart-logo btn"></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="border rounded mt-2">
        <table class="table table-borderless rounded">
            <tbody>
                <tr> 
                <div class="d-flex align-items-center mt-3 cart-header">
                      <div class="item-header"><b>Item</b></div>
                      <div class="unit-price-header"><b>Unit Price</b></div>
                      <div class="size-header"><b>Size</b></div>
                      <div class="quantity-header"><b>Quantity</b></div>
                      <div class="total-header"><b>Total</b></div>
                    </div>

                    <td><input type="checkbox" style="width: 20px; height: 30px;"></td>
                    <td ><img src="{{ asset('images/lanyard-sample.jpg') }}" class="cart-item"></td> 
                    <td><span>College of Science Lanyard (Reversible) </span></td> 
                    <td>₱150.00</td>
                    <td>
                        -
                        </td>
                    <td>
                        <div class="input-group">
                            <button class="btn btn-outline-primary" type="button">-</button>
                            <input type="text" class="form-control btn btn-outline-primary" readonly value="1" style="width: 50px;">
                            <button class="btn btn-outline-primary" type="button">+</button>
                        </div>
                    </td>
                    <td>₱150.00</td>
                    <td>
                    <img src="{{ asset('images/delete.svg') }}" class="cart-logo btn" alt="Delete">
</td>


            </tbody>
        </table>
    </div>

    <!-- Select All and Checkout Section -->
      <!-- Select All and Checkout Section -->
      <div class="d-flex col-12 mt-4 ">
          <input type="checkbox" id="select-all" style="width: 20px; height: 30px;"> <h5 class="ms-2 mt-2 fs-3">Select All <span id="select-count">(0) </span> </h5> 
        </div>
    <hr>
        <div class="d-flex justify-content-evenly align-items-center mt-4">
          <div> <span id="item-count">No. of Items: 0 item(s)</span></div>
          <div><span class="ms-5 fw-bold col-6" id="total-amount">TOTAL: ₱300.00</span> </div>
          <div><button class="btn btn-primary btn-lg">Proceed To Checkout</button></div>
    </div>
</div>
</div>
</body>
</html>
@endsection
