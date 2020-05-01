@extends('layouts.backend')

@section('mainContent')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content">
            <div class="ecommerce-widget">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW TASKS</div>
                                <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
                                    125
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-orangered hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW TICKETS</div>
                                <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
                                    257
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-indigo hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW COMMENTS</div>
                                <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
                                    243
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-greenyellow hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_add</i>
                            </div>
                            <div class="content">
                                <div class="text">NEW VISITORS</div>
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                                     data-fresh-interval="20">
                                    1225
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Order Time</th>
                                            <th class="border-0">Customer</th>
                                            <th class="border-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #1</td>
                                            <td>id000001</td>
                                            <td>20</td>
                                            <td>$80.00</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>Patricia J. King</td>
                                            <td>
                                                <span class="badge-dot badge-brand mr-1"></span>InTransit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #2</td>
                                            <td>id000002</td>
                                            <td>12</td>
                                            <td>$180.00</td>
                                            <td>25-08-2018 21:12:56</td>
                                            <td>Rachel J. Wicker</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #3</td>
                                            <td>id000003</td>
                                            <td>23</td>
                                            <td>$820.00</td>
                                            <td>24-08-2018 14:12:77</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #4</td>
                                            <td>id000004</td>
                                            <td>34</td>
                                            <td>$340.00</td>
                                            <td>23-08-2018 09:12:35</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Order Time</th>
                                            <th class="border-0">Customer</th>
                                            <th class="border-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #1</td>
                                            <td>id000001</td>
                                            <td>20</td>
                                            <td>$80.00</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>Patricia J. King</td>
                                            <td>
                                                <span class="badge-dot badge-brand mr-1"></span>InTransit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #2</td>
                                            <td>id000002</td>
                                            <td>12</td>
                                            <td>$180.00</td>
                                            <td>25-08-2018 21:12:56</td>
                                            <td>Rachel J. Wicker</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #3</td>
                                            <td>id000003</td>
                                            <td>23</td>
                                            <td>$820.00</td>
                                            <td>24-08-2018 14:12:77</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #4</td>
                                            <td>id000004</td>
                                            <td>34</td>
                                            <td>$340.00</td>
                                            <td>23-08-2018 09:12:35</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Order Time</th>
                                            <th class="border-0">Customer</th>
                                            <th class="border-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #1</td>
                                            <td>id000001</td>
                                            <td>20</td>
                                            <td>$80.00</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>Patricia J. King</td>
                                            <td>
                                                <span class="badge-dot badge-brand mr-1"></span>InTransit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #2</td>
                                            <td>id000002</td>
                                            <td>12</td>
                                            <td>$180.00</td>
                                            <td>25-08-2018 21:12:56</td>
                                            <td>Rachel J. Wicker</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #3</td>
                                            <td>id000003</td>
                                            <td>23</td>
                                            <td>$820.00</td>
                                            <td>24-08-2018 14:12:77</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #4</td>
                                            <td>id000004</td>
                                            <td>34</td>
                                            <td>$340.00</td>
                                            <td>23-08-2018 09:12:35</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <div class="card">
                            <h5 class="card-header">Recent Orders</h5>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                        <tr class="border-0">
                                            <th class="border-0">#</th>
                                            <th class="border-0">Image</th>
                                            <th class="border-0">Product Name</th>
                                            <th class="border-0">Product Id</th>
                                            <th class="border-0">Quantity</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Order Time</th>
                                            <th class="border-0">Customer</th>
                                            <th class="border-0">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #1</td>
                                            <td>id000001</td>
                                            <td>20</td>
                                            <td>$80.00</td>
                                            <td>27-08-2018 01:22:12</td>
                                            <td>Patricia J. King</td>
                                            <td>
                                                <span class="badge-dot badge-brand mr-1"></span>InTransit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #2</td>
                                            <td>id000002</td>
                                            <td>12</td>
                                            <td>$180.00</td>
                                            <td>25-08-2018 21:12:56</td>
                                            <td>Rachel J. Wicker</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #3</td>
                                            <td>id000003</td>
                                            <td>23</td>
                                            <td>$820.00</td>
                                            <td>24-08-2018 14:12:77</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>
                                                <div class="m-r-10">
                                                    <img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45" />
                                                </div>
                                            </td>
                                            <td>Product #4</td>
                                            <td>id000004</td>
                                            <td>34</td>
                                            <td>$340.00</td>
                                            <td>23-08-2018 09:12:35</td>
                                            <td>Michael K. Ledford</td>
                                            <td>
                                                <span class="badge-dot badge-success mr-1"></span>Delivered
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
