@extends('manager.layouts.backend')
@section('title', 'Order-Take')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Order Take</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/manager/order-take">Order Take</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <div class="content-full">
            <div class="row">
                <div class="col-sm-9 block block-rounded content-full">
                    <div class="block-title">KOT Order
                    </div><br>
                    <div class="table-bordered table-striped table-vcenter content-full">
                        <div class="row">
                            <div class="col-sm-4">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tr>
                                        <th colspan="2" class="text-center">Drink</th>
                                    </tr>
                                    <tr>
                                        <td>Beer</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Vodka</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Coco Cola</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Brandy</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Wishky</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Wine</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tr>
                                        <th colspan="2" class="text-center">Starter</th>
                                    </tr>
                                    <tr>
                                        <td>Chicken Tikka</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Panner Tikka</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Chinese Soup</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Chicken Soup</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Manchow Soup</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tr>
                                        <th colspan="2" class="text-center">Main Course</th>
                                    </tr>
                                    <tr>
                                        <td>Panner Makhni</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Chicken Batter Masala</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Tanduri Roti</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Panner Handi</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Tanduri Nan</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tr>
                                        <th colspan="2" class="text-center">Fast Food</th>
                                    </tr>
                                    <tr>
                                        <td>Pizza</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Burger</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Sendwitch</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Fanch Fries</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Sizzler</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tr>
                                        <th colspan="2" class="text-center">Rice - Biriyani</th>
                                    </tr>
                                    <tr>
                                        <td>Panner Biriyani</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Chicken Biriyani</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Plan Rice</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Jira Rice</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                    <tr>
                                        <td>Dal-Friy</td>
                                        <td><button class="btn btn-info">+</button></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 block block-rounded content-full">
                    
                    <table class="table table-bordered table-striped table-vcenter" style="margin-top:50px;">
                        <tr>
                            <th colspan="3" style="text-align:center;">KOT Summary</th>
                        </tr>
                        <tr>
                            <th>Qty</th>
                            <th>Name</th>
                            <th>Remove</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Beers</td>
                            <td><button class="btn btn-danger">-</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Chicken Tikka</td>
                            <td><button class="btn btn-danger">-</button></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-danger" style="padding-left:30px; padding-right:30px;">Exit</button></td>
                            <td colspan="2"><button class="btn btn-success">SAVE & PRINT</button></td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
