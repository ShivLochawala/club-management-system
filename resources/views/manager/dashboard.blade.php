@extends('manager.layouts.backend')
@section('title', 'Dashboard')
@section('content')
<style>
.sidebar-full{
    width: 100%;
}
.sidebar{
    width:150px;
    height: 100%;
    position: absolute;
}
.sidebar a{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    display: block;
}
.sidebar a:hover{
    background-color:gray;
}
.sidebar-content{
    margin-left: 170px;
    height: 100%;
    padding: 0px 10px;
}
.side-style a{
    margin-left:3px;
    padding: 16px 18px 16px 16px;
    text-decoration: none;
    font-size: 20px;
    display: block;
    border-right: 1px solid #F5F5F5;
    border-bottom: 1px solid #F5F5F5;
    color: black;
}
.side-style a:hover{
    background-color:#F5F5F5;
    color: black;
}
.side-style .active{
    background-color:#F5F5F5;
    color: black;
}

.square {
  width: 220px;
  height: 125px;
  position: relative;
  background-color: #F5F5F5;
  border-bottom: 5px solid gray;
  margin-right: 10px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}
/*
.square:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}*/
.square:hover {
  background-color: white;
  border-top: 1px solid #F5F5F5;
  border-right: 1px solid #F5F5F5;
  border-left: 1px solid #F5F5F5;
}
.square2 {
  width: 170px;
  height: 125px;
  position: relative;
  background-color: #F5F5F5;
  border-bottom: 5px solid #20B2AA;
  margin-right: 10px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.square2:hover {
  background-color: white;
  border-top: 1px solid #F5F5F5;
  border-right: 1px solid #F5F5F5;
  border-left: 1px solid #F5F5F5;
}
.tableshow{
  
}
.button_top{
    background-color:#F0F0F0;
    border: none;
    padding: 15px;
    font-size:18px;
    outline: none !important;
}
.button_top:hover{
    background-color:#C8C8C8;
}
.btns .active{
    background-color:white;
}
.btns{
    background-color: #F0F0F0;
}
.per60{
    width: 59%;
    height: 100%;
    position: absolute;
}
.per40{
    border-left: 2px solid #20B2AA;
    margin-left: 61%;
    height: 100%;
}
#client_pub_section{
    width: 15%;
}
#item_search{
    display:none;
}
th{
      border-top: 0 !important;
      border-bottom: 2px solid grey !important;
  }
@media screen and (max-width: 650px) {
  .square {
      width: 170px;
    }
  #client_pub_section{
      width: 200px;
    }
  .square2 {
      width: 170px;
    }
  .per60{
      display:none;
  }
  .per40{
      border-left: none;
      margin-left: 0;
      width: 100%;
  }
  #item_search{
    display:block;
  }
}
</style>

    <!-- Hero 
    <div class="bg-body-light">
        <div class="content">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h5 class="col-sm-2 h5 my-2">
                    <select name="client_pub_section" id="client_pub_section" class="form-control">
                        @foreach($client_pub_tables as $client_pub_table)
                            <option value="{{$client_pub_table->id}}">{{$client_pub_table->section_name}}</option>
                        @endforeach
                    </select>
                </h5>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><button class="btn btn-info"><i class="fa fa-filter" aria-hidden="true"></i> Status Filter</button></li>
                        <!--<li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/dashboard">Dashboard</a>
                        </li>

                    </ol>
                </nav>
            </div>
       </div>
    </div>
    -->
    <!-- END Hero -->

    <!-- Page Content 
    <div id="table_view">
    
    </div>-->
    <div class="content-full2">
        <div class="btns">
            <button class="button_top" id="orders">Orders</button>
            <button class="button_top" id="current">Current</button>
        </div>
        <div class="block">
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="orders"> 
                    <div class="form-group content-full">
                        <input type="search" name="search" class="form-control" placeholder="Search Orders">
                    </div>
                    <div class="sidebar side-style">
                        <a id="all">All</a>
                        <a id="take_away">Take-Away</a>
                        <a id="delivery">Delivery</a>
                        <a id="tableshow">Table</a>
                        <a id="free">Free</a>
                        <a id="occupied">Occupied</a>
                        <a id="unpaid">Unpaid</a>
                    </div>
                    <div class="sidebar-content">
                        <div class="all">
                            <div class="row">
                                <div class="square">
                                    New <br>
                                    Take-away
                                </div>
                                <div class="square">
                                    New <br>
                                    Delivery
                                </div>
                            </div>
                        </div>
                        <div class="take_away">
                            <div class="row">
                                <div class="square">
                                    New <br>
                                    Take-away
                                </div>
                            </div>
                        </div>
                        <div class="delivery">
                            <div class="row">
                                <div class="square">
                                    New </br>
                                    Delivery
                                </div>
                            </div>
                        </div>
                        <div class="tableshow">
                            <select name="client_pub_section" id="client_pub_section" class="form-control">
                            @foreach($client_pub_tables as $client_pub_table)
                                <option value="{{$client_pub_table->id}}">{{$client_pub_table->section_name}}</option>
                            @endforeach
                            </select><br>
                            <div id="table_view">
                            
                            </div>
                        </div>
                        <div class="free">
                            <div class="row">
                                <div class="square">
                                    Table 2
                                </div>
                                <div class="square">
                                    Table 5
                                </div>
                                <div class="square">
                                    Table 6
                                </div>
                            </div>
                        </div>
                        <div class="occupied">
                            <div class="row">
                                <div class="square">
                                    Table 1 <br>
                                    Unpaid Rs.225.00
                                </div>
                                <div class="square">
                                    Table 3 <br>
                                    In progress
                                </div>
                                <div class="square">
                                    Table 4 <br>
                                    In progress
                                </div>
                            </div>
                        </div>
                        <div class="unpaid">
                            <div class="row">
                                <div class="square">
                                    Table 1 <br>
                                    Unpaid Rs.225.00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-bottom:300px;"></div>
                </div>
                <div class="current">
                    <div class="per60">
                        <div class="form-group content-full">
                            <input type="search" name="search" class="form-control" placeholder="Search items">
                        </div>
                        <div class="sidebar side-style">
                            <a id="allc">All</a>
                            <a id="drinks">Drinks</a>
                            <a id="dishes">Dishes</a>
                        </div>
                        <div class="sidebar-content">
                            <div class="allc">
                                <div class="row">
                                    <div class="square2" >
                                        Burger <br>
                                        &#8377; 100
                                    </div>
                                    <div class="square2">
                                        Snack <br>
                                        &#8377; 75
                                    </div>
                                </div>
                            </div>
                            <div class="drinks">
                                <div class="row">
                                    <div class="square2">
                                        Beer <br>
                                        &#8377; 250
                                    </div>
                                    <div class="square2">
                                        Vodka <br>
                                        &#8377; 350
                                    </div>
                                    <div class="square2">
                                        Coco-Cola <br>
                                        &#8377; 50
                                    </div>
                                    <div class="square2">
                                        Brandy <br>
                                        &#8377; 700
                                    </div>
                                    <div class="square2">
                                        Wishky <br>
                                        &#8377; 550
                                    </div>
                                    <div class="square2">
                                        Wine <br>
                                        &#8377; 450
                                    </div>
                                </div>
                            </div>
                            <div class="dishes">
                                <div class="row">
                                    <div class="square2">
                                        Chicken Tikka </br>
                                        &#8377; 250
                                    </div>
                                    <div class="square2">
                                        Panner Tikka <br>
                                        &#8377; 200
                                    </div>
                                    <div class="square2">
                                        Chinese Soup <br>
                                        &#8377; 100
                                    </div>
                                    <div class="square2">
                                        Chicken Soup <br>
                                        &#8377; 150
                                    </div>
                                    <div class="square2">
                                        Manchow Soup <br>
                                        &#8377; 120
                                    </div>
                                    <div class="square2">
                                        Pizza <br>
                                        &#8377; 250
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="per40">
                        <div class="content-full">
                            <div class="block">
                                <div class="block-content" style="background-color:#F0F0F0">
                                    <div class="block-title">
                                        <h5>Table 1 | <a href="" data-toggle="modal" data-target="#add-member">Add Customer</a>
                                        <button id="clear" style="float:right; border: none; outline: none !important;">Clear</button>
                                        </h5>
                                    </div>
                                    <div class="form-group content-full">
                                        <input type="search" name="search" id="item_search" class="form-control" placeholder="Search items">
                                    </div>
                                    <div class="block-content">
                                        <table class="table" id="kot_mini">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="hints">
                                                    <td colspan="4" style="font-size:15px;">Add items by selecting from the list. If you want to remove this saved draft, click clear.</td>
                                                </tr>    
                                            </tbody>
                                        </table>
                                        <button class="btn btn-primary" style="width:49%">Order Ticket</button>
                                        <button class="btn btn-success" style="width:49%">Charge &#8377; 0.00</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div style="margin-bottom:100px;"></div>
                </div>
                <!--
                <div class="row content-full">
                    <div class="col-dm-2 side-style">
                        <a id="all">All</a>
                        <a id="take_away">Take-Away</a>
                        <a id="delivery">Delivery</a>
                        <a id="tableshow">Table</a>
                        <a id="free">Free</a>
                        <a id="occupied">Occupied</a>
                        <a id="unpaid">Unpaid</a>
                    </div>
                    <div class="col-dm-10">
                        <div style="margin-left:20px;">
                            <div class="all">
                                <div class="row">
                                    <div class="square">
                                        New <br>
                                        Take-away
                                    </div>
                                    <div class="square">
                                        New <br>
                                        Delivery
                                    </div>
                                </div>
                            </div>
                            <div class="take_away">
                                <div class="row">
                                    <div class="square">
                                        New <br>
                                        Take-away
                                    </div>
                                </div>
                            </div>
                            <div class="delivery">
                                <div class="row">
                                    <div class="square">
                                        New </br>
                                        Delivery
                                    </div>
                                </div>
                            </div>
                            <div class="tableshow">
                                <select name="client_pub_section" id="client_pub_section" class="form-control" style="width:15%;">
                                @foreach($client_pub_tables as $client_pub_table)
                                    <option value="{{$client_pub_table->id}}">{{$client_pub_table->section_name}}</option>
                                @endforeach
                                </select><br>
                                <div id="table_view">
                                
                                </div>
                            </div>
                            <div class="free">
                                <div class="row">
                                    <div class="square">
                                        Table 2
                                    </div>
                                    <div class="square">
                                        Table 5
                                    </div>
                                    <div class="square">
                                        Table 6
                                    </div>
                                </div>
                            </div>
                            <div class="occupied">
                                <div class="row">
                                    <div class="square">
                                        Table 1 <br>
                                        Unpaid Rs.225.00
                                    </div>
                                    <div class="square">
                                        Table 3 <br>
                                        In progress
                                    </div>
                                    <div class="square">
                                        Table 4 <br>
                                        In progress
                                    </div>
                                </div>
                            </div>
                            <div class="unpaid">
                                <div class="row">
                                    <div class="square">
                                        Table 1 <br>
                                        Unpaid Rs.225.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
    <div class="modal fade" id="add-member" tabindex="-1" role="dialog" aria-labelledby="add-member" aria-hidden="true" style="">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Add Customer(Member)</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="gutters-tiny">
                        <form action="/{{session()->get('client-slug')}}/manager/add-manager" method="post">
                            @csrf
                            <div class="form-group">
                                Name : <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                Mobile : <input type="number" name="mobile" class="form-control">
                            </div>
                            <div class="form-group">
                                Waiter : 
                                <select name="waiter_id" id="" class="form-control">
                                    <option value="">Select</option>
                                    @foreach($waiters as $waiter)
                                    <option value="{{$waiter->id}}">{{$waiter->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function(){
    $(".orders").show();
    $("#orders").addClass("active");
    $(".current").hide();
    $("#current").removeClass("active");
    $(".allc").show();
    $("#allc").addClass("active");
    $(".drinks").hide();
    $(".dishes").hide();
    $(".all").show();
    $("#all").addClass("active");
    $(".take_away").hide();
    $(".delivery").hide();
    $(".tableshow").hide();
    $(".free").hide();
    $(".occupied").hide();
    $(".unpaid").hide();
    
    $("#clear").click(function(){
        $("#kot_mini tbody").html("");
        $("#kot_mini tbody").append('<tr class="hints"><td colspan="4" style="font-size:15px;">Add items by selecting from the list. If you want to remove this saved draft, click clear.</td></tr>');
    })

    $("#orders").click(function(){
        $(".orders").show();
        $("#orders").addClass("active");
        $(".current").hide();
        $("#current").removeClass("active");
    });
    $("#current").click(function(){
        $(".orders").hide();
        $("#orders").removeClass("active");
        $(".current").show();
        $("#current").addClass("active");
    });
    $("#allc").click(function(){
        $(".allc").show();
        $("#allc").addClass("active");
        $(".drinks").hide();
        $("#drinks").removeClass("active");
        $(".dishes").hide();
        $("#dishes").removeClass("active");
    })
    $("#drinks").click(function(){
        $(".allc").hide();
        $("#allc").removeClass("active");
        $(".drinks").show();
        $("#drinks").addClass("active");
        $(".dishes").hide();
        $("#dishes").removeClass("active");
    })
    $("#dishes").click(function(){
        $(".allc").hide();
        $("#allc").removeClass("active");
        $(".drinks").hide();
        $("#drinks").removeClass("active");
        $(".dishes").show();
        $("#dishes").addClass("active");
    })

    $(".square2").click(function (){
        var text = $(this).text();
        console.log(text);
        var arr = text.split('\n');
        console.log(arr);
        $(".hints").hide();
        var markup = '<tr><td>'+ arr[1] +'</td><td><i class="fas fa-minus-circle"></i> &nbsp; 1 &nbsp; <i class="fas fa-plus-circle"></i></td><td> '+ arr[2]+'</td><td><i class="fas fa-highlighter"></i>  &nbsp;  &nbsp;  &nbsp;  <i class="fas fa-trash-alt"></i></td></tr>'; 
        var tableBody = $("#kot_mini tbody"); 
        tableBody.append(markup); 
    })

    $("#all").click(function(){
        $(".all").show();
        $("#all").addClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#take_away").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").show();
        $("#take_away").addClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#delivery").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").show();
        $("#delivery").addClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#tableshow").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").show();
        $("#tableshow").addClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#free").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").show();
        $("#free").addClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#occupied").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").show();
        $("#occupied").addClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#unpaid").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".tableshow").hide();
        $("#tableshow").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").show();
        $("#unpaid").addClass("active");
    })
    var id=$("#client_pub_section").val();
    $.ajax({
        type: "GET",
        url: "{{url('/{slug}/manager/table-count')}}",
        data: {id:id},
        success: function(data){
            $("#table_view").html(data);
        }
    })
    $("#client_pub_section").change(function(){
        var id=$(this).val();
        $.ajax({
            type: "GET",
            url: "{{url('/{slug}/manager/table-count')}}",
            data: {id:id},
            success: function(data){
                $("#table_view").html(data);
            }
        })
    });
});
</script>
@endsection
