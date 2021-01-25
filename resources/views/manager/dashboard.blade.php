@extends('manager.layouts.backend')
@section('title', 'Dashboard')
@section('content')
<style>
.sidebar-full{
    width: 100%;
}
.sidebar{
    width:140px;
    height: 100%;
}
.sidebar a{
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    display: block;
    border-style: double;
}
.sidebar a:hover{
    background-color:gray;
}
.sidebar-content{
    margin-left: 150px;
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
}
.side-style a:hover{
    background-color:#F5F5F5;
}
.side-style .active{
    background-color:#F5F5F5;
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
.square:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}
.square:hover {
  background-color: white;
  border-top: 1px solid #F5F5F5;
  border-right: 1px solid #F5F5F5;
  border-left: 1px solid #F5F5F5;
}
.table_view{
    margin-left: 140px;
}
@media screen and (max-width: 650px) {
  .square {width: 170px;}
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
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title superadmin-text">Orders</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="form-group content-full">
                    <input type="search" name="search" class="form-control" placeholder="Search Orders">
                </div>
                <div class="row content-full">
                    <div class="col-dm-2 side-style">
                        <a id="all">All</a>
                        <a id="take_away">Take-Away</a>
                        <a id="delivery">Delivery</a>
                        <a id="table">Table</a>
                        <a id="free">Free</a>
                        <a id="occupied">Occupied</a>
                        <a id="unpaid">Unpaid</a>
                    </div>
                    <div class="col-dm-10" >
                        <div class="row" style="margin-left:20px;">
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
                            <div class="table">
                                <select name="client_pub_section" id="client_pub_section" class="form-control" style="width:15%;">
                                @foreach($client_pub_tables as $client_pub_table)
                                    <option value="{{$client_pub_table->id}}">{{$client_pub_table->section_name}}</option>
                                @endforeach
                                </select><br>
                                <div id="table_view" class="row">
                                
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
                <!--<div class="sidebar-full">
                    <div class="sidebar">
                        <a href="#" class="">All</a>
                        <a href="#" class="">Take-Away</a>
                        <a href="#" class="">Delivery</a>
                        <a href="#" class="">Table</a>
                        <a href="#" class="">Free</a>
                        <a href="#" class="">Occupied</a>
                        <a href="#" class="">Unpaid</a>
                    </div>
                    <div class="sidebar-content">
                        Hello Licrapro
                    </div>
                </div>-->
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
    $(".all").show();
    $(".take_away").hide();
    $(".delivery").hide();
    $(".table").hide();
    $(".free").hide();
    $(".occupied").hide();
    $(".unpaid").hide();
    
    $("#all").click(function(){
        $(".all").show();
        $("#all").addClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".table").hide();
        $("#table").removeClass("active");
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
        $(".table").hide();
        $("#table").removeClass("active");
        $(".free").hide();
        $("#table").removeClass("active");
        $(".occupied").hide();
        $("#table").removeClass("active");
        $(".unpaid").hide();
        $("#table").removeClass("active");
    })
    $("#delivery").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").show();
        $("#delivery").addClass("active");
        $(".table").hide();
        $("#table").removeClass("active");
        $(".free").hide();
        $("#free").removeClass("active");
        $(".occupied").hide();
        $("#occupied").removeClass("active");
        $(".unpaid").hide();
        $("#unpaid").removeClass("active");
    })
    $("#table").click(function(){
        $(".all").hide();
        $("#all").removeClass("active");
        $(".take_away").hide();
        $("#take_away").removeClass("active");
        $(".delivery").hide();
        $("#delivery").removeClass("active");
        $(".table").show();
        $("#table").addClass("active");
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
        $(".table").hide();
        $("#table").removeClass("active");
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
        $(".table").hide();
        $("#table").removeClass("active");
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
        $(".table").hide();
        $("#table").removeClass("active");
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
