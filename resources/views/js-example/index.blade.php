<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        .page-link {
            width: 47px;
            ;
        }

        .page-link:focus {
            box-shadow: none
        }

        .page-link:hover {
            background: transparent
        }

        .page-link {
            color: #000;
            font-weight: 700
        }
    </style>
</head>

<body>

    <div class="container my-5 ">
        <div class="row cart-content">
            {{-- left side --}}
            <div class="col-md-8 col-sm-6 col-12">
                {{-- -- cart_content_item --- --}}
                <div class="row mb-3 cart_content_item " style="border:1px solid #000">
                    {{-- cart_image --}}
                    <div class="col-5">
                        <div class="cart_image">
                            <img class="img-fluid" src="{{ asset('assets/images/blog/sample.jpg') }}" alt="">
                        </div>
                    </div>
                    {{-- cart content and quantity --}}
                    <div class="col-7">
                        {{-- cart content --}}
                        <div class="row py-4">
                            <div class="col-6 cart-title">
                                <h6 class="text-black mb-2">Blue Zara Shirt</h6>
                                <p class="text-black mb-1"> Shirt Blue</p>
                                <p class="text-black mb-1">Color: Blue </p>
                                <p class="text-black mb-1">Size: M</p>
                            </div>
                            {{-- Quantity increment Decrement --}}
                            <div class="col-6">
                                <nav>
                                    <ul class="pagination justify-content-end set_quantity">
                                        <li class="page-item">
                                            <button class="page-link" onclick="increasNumber('textbox','itemval')">+</button>
                                        </li>
                                        <li class="page-item">
                                            <input class="page-link" id="textbox" type="text" name="qty"
                                                value="1" class="">
                                        </li>
                                        <li class="page-item">
                                            <button class="page-link" onclick="decreasNumber('textbox','itemval')">-</button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        {{-- cart content --}}
                        {{-- cart wishlist --}}
                        <div class="row">
                            <div class="col-8 ">
                                <div class="remode_wish d-flex justify-content-between">
                                    <p>
                                        Remove Item
                                    </p>
                                    <p>
                                        Move to wish list
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="d-flex justify-content-end">
                                    <h4 id="itemval">$0.00</h4>
                                </div>
                            </div>
                        </div>{{-- cart wishlist --}}
                    </div>
                </div>{{-- -- cart_content_item --- --}}

                {{-- -- cart_content_item --- --}}
                <div class="row mb-3 cart_content_item " style="border:1px solid #000">
                    {{-- cart_image --}}
                    <div class="col-5">
                        <div class="cart_image">
                            <img class="img-fluid" src="{{ asset('assets/images/blog/sample.jpg') }}" alt="">
                        </div>
                    </div>
                    {{-- cart content and quantity --}}
                    <div class="col-7">
                        {{-- cart content --}}
                        <div class="row py-4">
                            <div class="col-6 cart-title">
                                <h6 class="text-black mb-2">Blue Zara Shirt</h6>
                                <p class="text-black mb-1"> Shirt Blue</p>
                                <p class="text-black mb-1">Color: Blue </p>
                                <p class="text-black mb-1">Size: M</p>
                            </div>
                            {{-- Quantity increment Decrement --}}
                            <div class="col-6">
                                <nav>
                                    <ul class="pagination justify-content-end set_quantity">
                                        <li>
                                            <button class="page-link" onclick="increasNumber('textbox1','itemval1')">+</button>
                                        </li>
                                        <li>
                                            <input class="page-link" id="textbox1" type="text" name="qty"
                                                value="1" class="">
                                        </li>
                                        <li>
                                            <button class="page-link" onclick="decreasNumber('textbox1','itemval1')">-</button>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        {{-- cart content --}}
                        {{-- cart wishlist --}}
                        <div class="row">
                            <div class="col-8 ">
                                <div class="remode_wish d-flex justify-content-between">
                                    <p>
                                        Remove Item
                                    </p>
                                    <p>
                                        Move to wish list
                                    </p>
                                </div>
                            </div>
                            <div class="col-4 ">
                                <div class="d-flex justify-content-end">
                                    <h4 id="itemval1">$0.00</h4>
                                </div>
                            </div>
                        </div>{{-- cart wishlist --}}
                    </div>
                </div>{{-- -- cart_content_item --- --}}
            </div>
            {{-- right side --}}
            <div class="col-md-4 col-sm-6 col-12">
                {{-- price area --}}
                <div class="right_sidebar shadow  bg-white p-3">
                    <h2 class="product_name mb-3"> the total amount</h2>
                    <div class="price_indiv d-flex justify-content-between mb-1">
                        <p>product amount</p>
                        <p>$ <span>0.00</span></p>
                    </div>
                    <div class="price_indiv d-flex justify-content-between mb-1">
                        <p>shipping charge</p>
                        <p>$ <span>0.00</span></p>
                    </div>
                    <hr>
                    <div class="total_amount d-flex justify-content-between ">
                        <p class="font-weight-bold">Total Amount (including Vat)</p>
                        <p class="font-weight-bold"> <span id="total_cart_amt">00.00</span></p>
                    </div>
                    <div class="checkout mb-2">
                        <button class="btn btn-success">Checkout</button>
                    </div>
                    <div class="discount_cod shadow my-3">
                        <div class="accordion" id="accordionone">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn  text-black" type="button" data-toggle="collapse"
                                            data-target="#collapseOne">
                                            Add a discount code (optional)
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordionone">
                                    <div class="card-body">
                                        <input type="text" class="form-control" name=" "
                                            id="discount_code1" placeholder="Enter The DIscount Code">
                                        <small class="text-dark" id="error_trw"> code is february21</small>
                                        <br>
                                        <button class="btn btn-primary mt-3" onclick="discount_code()">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" shadow p-4 bg-white">
                        <div class="pt-4">
                            <h6>Axpected Delivery Date</h6>
                            <p>february 21th 2024 - july 21th 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <script>

        const increasNumber = (qtyId,itemprice) => {
            var itemVal = document.getElementById(qtyId);
            var itemprice = document.getElementById(itemprice);
            if (itemVal.value>=5) {
                itemVal.value = 5;
                itemVal.style.background = 'red';
                itemVal.style.color = '#fff';
            }else {
                itemVal.value = parseInt(itemVal.value) + 1;
                itemprice.innerText = parseInt(itemprice.innerText) +15;
            }
        }
        const decreasNumber = (qtyId,itemprice) => {
            var itemVal = document.getElementById(qtyId);
            var itemprice = document.getElementById(itemprice);
            if (itemVal.value<=1) {
                itemVal.value = 1
            }else {
                itemVal.value = parseInt(itemVal.value) - 1;
                itemVal.style.background = '#fff';
                itemVal.style.color = '#000';
                itemprice.innerText = parseInt(itemprice.innerText) -15;
            }
        }

    </script>

</body>

</html>
