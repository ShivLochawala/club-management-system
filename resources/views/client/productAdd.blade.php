@extends('client.layouts.backend')
@section('title', 'Products')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Product Add</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Products</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/products/product-add">Add</a>
                        </li>
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content-full">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header">
                <h2>Product Master - Bar</h2>
            </div>
            <div class="block-content">
                <form method="POST" action="/client/masters/products">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Product code</label>
                                    <input type="text" name="product_code" class="form-control" value="{{old('product_code')}}">
                                    @if ($errors->has('product_code'))
                                        <span class="error">{{ $errors->first('product_code') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Section</label>
                                    <select name="section" id="" class="form-control">
                                        <option value="">SELECT</option>
                                        <option value="Whisky">Whisky</option>
                                        <option value="Brandy">Brandy</option>
                                        <option value="Rum">Rum</option>
                                        <option value="Gin">Gin</option>
                                        <option value="Vodka">Vodka</option>
                                        <option value="Cool Drink">Cool Drink</option>
                                        <option value="Cigarettes">Cigarettes</option>
                                        <option value="Beer">Beer</option>
                                        <option value="Wine">Wine</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @if ($errors->has('section'))
                                        <span class="error">{{ $errors->first('section') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                                    @if ($errors->has('description'))
                                        <span class="error">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Product No</label>
                                    <input type="text" name="product_no" class="form-control" value="{{old('product_no')}}">
                                    @if ($errors->has('product_no'))
                                        <span class="error">{{ $errors->first('product_no') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" name="department" class="form-control" value="{{old('department')}}">
                                    @if ($errors->has('department'))
                                        <span class="error">{{ $errors->first('department') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" id="" class="form-control">
                                        <option value="">SELECT</option>
                                        <option value="Liquors">Liquors</option>
                                        <option value="Cool Drinks">Cool Drinks</option>
                                        <option value="Snacks">Snacks</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="error">{{ $errors->first('category') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div role="separator" class="divider-hor"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>UOM</label>
                                    <input type="text" name="uom" class="form-control" value="{{old('uom')}}">
                                    @if ($errors->has('uom'))
                                        <span class="error">{{ $errors->first('uom') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Contents</label>
                                    <input type="text" name="contents" class="form-control" value="{{old('contents')}}">
                                    @if ($errors->has('contents'))
                                        <span class="error">{{ $errors->first('contents') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Sold In</label>
                                    <input type="text" name="sold_in" class="form-control" value="{{old('sold_in')}}">
                                    @if ($errors->has('sold_in'))
                                        <span class="error">{{ $errors->first('sold_in') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Conv. Ratio</label>
                                    <input type="text" name="conv_ratio" class="form-control" value="{{old('conv_ratio')}}">
                                    @if ($errors->has('conv_ratio'))
                                        <span class="error">{{ $errors->first('conv_ratio') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Cost Price</label>
                                    <input type="text" name="cost_price" class="form-control" value="{{old('cost_price')}}">
                                    @if ($errors->has('cost_price'))
                                        <span class="error">{{ $errors->first('cost_price') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>GST</label>
                                    <input type="text" name="gst" class="form-control" value="{{old('gst')}}">
                                    @if ($errors->has('gst'))
                                        <span class="error">{{ $errors->first('gst') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Transportation</label>
                                    <input type="text" name="transportation" class="form-control" value="{{old('transportation')}}">
                                    @if ($errors->has('transportation'))
                                        <span class="error">{{ $errors->first('transportation') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Other Charges</label>
                                    <input type="text" name="other_charges" class="form-control" value="{{old('other_charges')}}">
                                    @if ($errors->has('other_charges'))
                                        <span class="error">{{ $errors->first('other_charges') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Landing Cost</label>
                                    <input type="text" name="landing_cost" class="form-control" value="{{old('landing_cost')}}">
                                    @if ($errors->has('landing_cost'))
                                        <span class="error">{{ $errors->first('landing_cost') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div role="separator" class="divider-hor"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Opening Stock</label>
                                    <input type="text" name="opening_stock" class="form-control" value="{{old('opening_stock')}}">
                                    @if ($errors->has('opening_stock'))
                                        <span class="error">{{ $errors->first('opening_stock') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>As On</label>
                                    <input type="text" name="as_on" class="form-control" value="{{old('as_on')}}">
                                    @if ($errors->has('as_on'))
                                        <span class="error">{{ $errors->first('as_on') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Spill Over (%)</label>
                                    <input type="text" name="spill_over" class="form-control" value="{{old('spill_over')}}">
                                    @if ($errors->has('spill_over'))
                                        <span class="error">{{ $errors->first('spill_over') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Reorder Level</label>
                                    <input type="text" name="reorder_level" class="form-control" value="{{old('reorder_level')}}">
                                    @if ($errors->has('reorder_level'))
                                        <span class="error">{{ $errors->first('reorder_level') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Selling Cost</label>
                                    <input type="text" name="selling_cost" class="form-control" value="{{old('selling_cost')}}">
                                    @if ($errors->has('selling_cost'))
                                        <span class="error">{{ $errors->first('selling_cost') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Qty as per stk</label>
                                    <input type="text" name="qty_as_per_stk" class="form-control" value="{{old('qty_as_per_stk')}}">
                                    @if ($errors->has('qty_as_per_stk'))
                                        <span class="error">{{ $errors->first('qty_as_per_stk') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Qty as per sale</label>
                                    <input type="text" name="qty_as_per_sale" class="form-control" value="{{old('qty_as_per_sale')}}">
                                    @if ($errors->has('qty_as_per_sale'))
                                        <span class="error">{{ $errors->first('qty_as_per_sale') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="separator" class="divider-ver"></div>
                    <div class="col-sm-3.9">
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                            <div class="drag-text">
                            <h3>Drag and drop a file <br>
                                    or <br>
                                select add Image</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                        <div class="row product-btn">
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-success">Save</button>
                            </div>
                            <div class="col-sm-6 text-center">
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="separator" class="divider-hor"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>April</label>
                            <input type="text" name="april" class="form-control" value="{{old('april')}}">
                            @if ($errors->has('april'))
                                <span class="error">{{ $errors->first('april') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>May</label>
                            <input type="text" name="may" class="form-control" value="{{old('may')}}">
                            @if ($errors->has('may'))
                                <span class="error">{{ $errors->first('may') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>June</label>
                            <input type="text" name="june" class="form-control" value="{{old('june')}}">
                            @if ($errors->has('june'))
                                <span class="error">{{ $errors->first('june') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>July</label>
                            <input type="text" name="july" class="form-control" value="{{old('july')}}">
                            @if ($errors->has('july'))
                                <span class="error">{{ $errors->first('july') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>August</label>
                            <input type="text" name="august" class="form-control" value="{{old('august')}}">
                            @if ($errors->has('august'))
                                <span class="error">{{ $errors->first('august') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Septmeber</label>
                            <input type="text" name="septmeber" class="form-control" value="{{old('septmeber')}}">
                            @if ($errors->has('septmeber'))
                                <span class="error">{{ $errors->first('septmeber') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Octobar</label>
                            <input type="text" name="octobar" class="form-control" value="{{old('octobar')}}">
                            @if ($errors->has('octobar'))
                                <span class="error">{{ $errors->first('octobar') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>November</label>
                            <input type="text" name="november" class="form-control" value="{{old('november')}}">
                            @if ($errors->has('november'))
                                <span class="error">{{ $errors->first('november') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>December</label>
                            <input type="text" name="december" class="form-control" value="{{old('december')}}">
                            @if ($errors->has('december'))
                                <span class="error">{{ $errors->first('december') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>January</label>
                            <input type="text" name="january" class="form-control" value="{{old('january')}}">
                            @if ($errors->has('january'))
                                <span class="error">{{ $errors->first('january') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Febraury</label>
                            <input type="text" name="febraury" class="form-control" value="{{old('febraury')}}">
                            @if ($errors->has('febraury'))
                                <span class="error">{{ $errors->first('febraury') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>March</label>
                            <input type="text" name="march" class="form-control" value="{{old('march')}}">
                            @if ($errors->has('march'))
                                <span class="error">{{ $errors->first('march') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
