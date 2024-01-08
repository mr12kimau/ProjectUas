<x-app-layout>
        <div class="c-body">
            <main class="c-main">
                    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                            </div>
            <div class="col-lg-7">
                <div wire:snapshot="{&quot;data&quot;:{&quot;query&quot;:&quot;&quot;,&quot;search_results&quot;:[[],{&quot;class&quot;:&quot;Illuminate\\Support\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;how_many&quot;:5},&quot;memo&quot;:{&quot;id&quot;:&quot;ezsztK83leMKAgnADu30&quot;,&quot;name&quot;:&quot;search-product&quot;,&quot;path&quot;:&quot;app\/pos&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;581af295abe3ffe0b90ffe3ef20ba82ee86eb1680dbbf3cd551db335802076e1&quot;}" wire:effects="[]" wire:id="ezsztK83leMKAgnADu30" class="position-relative">
    <div class="card mb-0 border-0 shadow-sm">
        <div class="card-body">
            <div class="form-group mb-0">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="bi bi-search text-primary"></i>
                        </div>
                    </div>
                    <input wire:keydown.escape="resetQuery" wire:model.live.debounce.500ms="query" type="text" class="form-control" placeholder="Type product name or code....">
                </div>
            </div>
        </div>
    </div>

    <div wire:loading class="card position-absolute mt-1 border-0" style="z-index: 1;left: 0;right: 0;">
        <div class="card-body shadow">
            <div class="d-flex justify-content-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
        </div>
    </div>

    <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
</div>
                <div wire:snapshot="{&quot;data&quot;:{&quot;categories&quot;:[[[null,{&quot;class&quot;:&quot;Modules\\Product\\Entities\\Category&quot;,&quot;key&quot;:1,&quot;s&quot;:&quot;mdl&quot;}],[null,{&quot;class&quot;:&quot;Modules\\Product\\Entities\\Category&quot;,&quot;key&quot;:2,&quot;s&quot;:&quot;mdl&quot;}]],{&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;category_id&quot;:&quot;&quot;,&quot;limit&quot;:9,&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;SdwbIBL76barhJswd2MH&quot;,&quot;name&quot;:&quot;pos.product-list&quot;,&quot;path&quot;:&quot;app\/pos&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:{&quot;IG95xDF&quot;:[&quot;div&quot;,&quot;XsSNy6cK37hwUdnHBf9c&quot;]},&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;b7af8f6d6f5de0ba08c1bce3b679286ffcba94796cc608db4370080ed9bef427&quot;}" wire:effects="{&quot;url&quot;:{&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false}},&quot;listeners&quot;:[&quot;selectedCategory&quot;,&quot;showCount&quot;]}" wire:id="SdwbIBL76barhJswd2MH">
    <div class="card border-0 shadow-sm mt-3">
        <div class="card-body">
            <div wire:snapshot="{&quot;data&quot;:{&quot;categories&quot;:[[[null,{&quot;class&quot;:&quot;Modules\\Product\\Entities\\Category&quot;,&quot;key&quot;:1,&quot;s&quot;:&quot;mdl&quot;}],[null,{&quot;class&quot;:&quot;Modules\\Product\\Entities\\Category&quot;,&quot;key&quot;:2,&quot;s&quot;:&quot;mdl&quot;}]],{&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;category&quot;:null,&quot;showCount&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;XsSNy6cK37hwUdnHBf9c&quot;,&quot;name&quot;:&quot;pos.filter&quot;,&quot;path&quot;:&quot;app\/pos&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;85c61bfadd7478ef7abbe3506b340e87c024ec0f33edeb1d642756039463fcf3&quot;}" wire:effects="[]" wire:id="XsSNy6cK37hwUdnHBf9c">
    <div class="form-row">
        <div class="col-md-7">
            <div class="form-group">
                <label>Product Category</label>
                <select wire:model.live="category" class="form-control">
                    <option value="">All Products</option>
                    <!-- __BLOCK__ -->                        <option value="1">Random</option>
                                            <option value="2">Kopi</option>
                     <!-- __ENDBLOCK__ -->
                </select>
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Product Count</label>
                <select wire:model.live="showCount" class="form-control">
                    <option value="9">9 Products</option>
                    <option value="15">15 Products</option>
                    <option value="21">21 Products</option>
                    <option value="30">30 Products</option>
                    <option value="">All Products</option>
                </select>
            </div>
        </div>
    </div>
</div>
            <div class="row position-relative">
                <div wire:loading.flex class="col-12 position-absolute justify-content-center align-items-center" style="top:0;right:0;left:0;bottom:0;background-color: rgba(255,255,255,0.5);z-index: 99;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- __BLOCK__ -->                    <div wire:click.prevent="selectProduct({&quot;id&quot;:1,&quot;category_id&quot;:2,&quot;product_name&quot;:&quot;Kopi hangat&quot;,&quot;product_code&quot;:&quot;1&quot;,&quot;product_barcode_symbology&quot;:&quot;C128&quot;,&quot;product_quantity&quot;:9,&quot;product_cost&quot;:0.5,&quot;product_price&quot;:2,&quot;product_unit&quot;:&quot;PC&quot;,&quot;product_stock_alert&quot;:1,&quot;product_order_tax&quot;:1,&quot;product_tax_type&quot;:2,&quot;product_note&quot;:&quot;Kopi robusta&quot;,&quot;created_at&quot;:&quot;2024-01-08T14:16:54.000000Z&quot;,&quot;updated_at&quot;:&quot;2024-01-08T14:26:53.000000Z&quot;,&quot;media&quot;:[]})" class="col-lg-4 col-md-6 col-xl-3" style="cursor: pointer;">
                        <div class="card border-0 shadow h-100">
                            <div class="position-relative">
                                <img height="200" src="/images/fallback_product_image.png" class="card-img-top" alt="Product Image">
                                <div class="badge badge-info mb-3 position-absolute" style="left:10px;top: 10px;">Stock: 9</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <h6 style="font-size: 13px;" class="card-title mb-0">Kopi hangat</h6>
                                    <span class="badge badge-success">
                                    1
                                </span>
                                </div>
                                <p class="card-text font-weight-bold">$2.00</p>
                            </div>
                        </div>
                    </div>
                 <!-- __ENDBLOCK__ -->
            </div>
            <div class="">
                <div>
    <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
</div>

            </div>
        </div>
    </div>
</div>
            </div>
            <div class="col-lg-5">
                <div wire:snapshot="{&quot;data&quot;:{&quot;listeners&quot;:[[&quot;productSelected&quot;,&quot;discountModalRefresh&quot;],{&quot;s&quot;:&quot;arr&quot;}],&quot;cart_instance&quot;:&quot;sale&quot;,&quot;customers&quot;:[[[null,{&quot;class&quot;:&quot;Modules\\People\\Entities\\Customer&quot;,&quot;key&quot;:1,&quot;s&quot;:&quot;mdl&quot;}]],{&quot;class&quot;:&quot;Illuminate\\Database\\Eloquent\\Collection&quot;,&quot;s&quot;:&quot;clctn&quot;}],&quot;global_discount&quot;:0,&quot;global_tax&quot;:0,&quot;shipping&quot;:0,&quot;quantity&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;check_quantity&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;discount_type&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;item_discount&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;data&quot;:null,&quot;customer_id&quot;:null,&quot;total_amount&quot;:0},&quot;memo&quot;:{&quot;id&quot;:&quot;zko4laTzR9dN6JKWagJJ&quot;,&quot;name&quot;:&quot;pos.checkout&quot;,&quot;path&quot;:&quot;app\/pos&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;da9f1bcefa1b758935cd0ab5f09e50c93aaf3a095486b142b034881adeea3a5f&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;productSelected&quot;,&quot;discountModalRefresh&quot;]}" wire:id="zko4laTzR9dN6JKWagJJ">
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div>
                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->

                <div class="form-group">
                    <label for="customer_id">Customer <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <a href="http://127.0.0.1:8000/customers/create" class="btn btn-primary">
                                <i class="bi bi-person-plus"></i>
                            </a>
                        </div>
                        <select wire:model.live="customer_id" id="customer_id" class="form-control">
                            <option value="" selected>Select Customer</option>
                            <!-- __BLOCK__ -->                                <option value="1">herman</option>
                             <!-- __ENDBLOCK__ -->
                        </select>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="text-center">
                            <th class="align-middle">Product</th>
                            <th class="align-middle">Price</th>
                            <th class="align-middle">Quantity</th>
                            <th class="align-middle">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- __BLOCK__ -->                            <tr>
                                <td colspan="8" class="text-center">
                        <span class="text-danger">
                            Please search & select products!
                        </span>
                                </td>
                            </tr>
                         <!-- __ENDBLOCK__ -->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Order Tax (0%)</th>
                                <td>(+) $0.00</td>
                            </tr>
                            <tr>
                                <th>Discount (0%)</th>
                                <td>(-) $0.00</td>
                            </tr>
                            <tr>
                                <th>Shipping</th>
                                <input type="hidden" value="0" name="shipping_amount">
                                <td>(+) $0.00</td>
                            </tr>
                            <tr class="text-primary">
                                <th>Grand Total</th>
                                                                <th>
                                    (=) $0.00
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="tax_percentage">Order Tax (%)</label>
                        <input wire:model.blur="global_tax" type="number" class="form-control" min="0" max="100" value="0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="discount_percentage">Discount (%)</label>
                        <input wire:model.blur="global_discount" type="number" class="form-control" min="0" max="100" value="0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="shipping_amount">Shipping</label>
                        <input wire:model.blur="shipping" type="number" class="form-control" min="0" value="0" required step="0.01">
                    </div>
                </div>
            </div>

            <div class="form-group d-flex justify-content-center flex-wrap mb-0">
                <button wire:click="resetCart" type="button" class="btn btn-pill btn-danger mr-3"><i class="bi bi-x"></i> Reset</button>
                <button wire:loading.attr="disabled" wire:click="proceed" type="button" class="btn btn-pill btn-primary" disabled><i class="bi bi-check"></i> Proceed</button>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">
                    <i class="bi bi-cart-check text-primary"></i> Confirm Sale
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="checkout-form" action="http://127.0.0.1:8000/app/pos" method="POST">
                <input type="hidden" name="_token" value="bmlEs9ZQO22lllZ3zySG6PijFz808E6zhVhDVNcA" autocomplete="off">                <div class="modal-body">
                    <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                    <div class="row">
                        <div class="col-lg-7">
                            <input type="hidden" value="" name="customer_id">
                            <input type="hidden" value="0" name="tax_percentage">
                            <input type="hidden" value="0" name="discount_percentage">
                            <input type="hidden" value="0" name="shipping_amount">
                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="total_amount">Total Amount <span class="text-danger">*</span></label>
                                        <input id="total_amount" type="text" class="form-control" name="total_amount" value="0" readonly required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="paid_amount">Received Amount <span class="text-danger">*</span></label>
                                        <input id="paid_amount" type="text" class="form-control" name="paid_amount" value="0" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="payment_method">Payment Method <span class="text-danger">*</span></label>
                                <select class="form-control" name="payment_method" id="payment_method" required>
                                    <option value="Cash">Cash</option>
                                    <option value="Credit Card">Credit Card</option>
                                    <option value="Bank Transfer">Bank Transfer</option>
                                    <option value="Cheque">Cheque</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="note">Note (If Needed)</label>
                                <textarea name="note" id="note" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Total Products</th>
                                        <td>
                                                <span class="badge badge-success">
                                                    0
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Order Tax (0%)</th>
                                        <td>(+) $0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Discount (0%)</th>
                                        <td>(-) $0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <input type="hidden" value="0" name="shipping_amount">
                                        <td>(+) $0.00</td>
                                    </tr>
                                    <tr class="text-primary">
                                        <th>Grand Total</th>
                                                                                <th>
                                            (=) $0.00
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

            </div>
        </div>
    </div>
            </main>
        </div>

        <footer class="c-footer">
    <div>Triangle Pos © 2024 || Developed by <strong><a target="_blank" href="https://fahimanzam.netlify.app">Fahim Anzam Dip</a></strong></div>

    <div class="mfs-auto d-md-down-none">Version <strong class="text-danger">1.0</strong></div>
</footer>
    </div>
<script>
        $(document).ready(function () {
            window.addEventListener('showCheckoutModal', event => {
                $('#checkoutModal').modal('show');

                $('#paid_amount').maskMoney({
                    prefix:'$',
                    thousands:',',
                    decimal:'.',
                    allowZero: false,
                });

                $('#total_amount').maskMoney({
                    prefix:'$',
                    thousands:',',
                    decimal:'.',
                    allowZero: true,
                });

                $('#paid_amount').maskMoney('mask');
                $('#total_amount').maskMoney('mask');

                $('#checkout-form').submit(function () {
                    var paid_amount = $('#paid_amount').maskMoney('unmasked')[0];
                    $('#paid_amount').val(paid_amount);
                    var total_amount = $('#total_amount').maskMoney('unmasked')[0];
                    $('#total_amount').val(total_amount);
                });
            });
        });
    </script>

</x-app-layout>