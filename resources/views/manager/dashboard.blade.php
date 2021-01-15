@extends('manager.layouts.backend')
@section('title', 'Dashboard')
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
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
                        </li>-->
                    </ol>
                </nav>
            </div>
       </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content --> 
    <div id="table_view">
    
    </div>

    <!-- END Page Content -->
    <div class="modal fade" id="add-member" tabindex="-1" role="dialog" aria-labelledby="add-member" aria-hidden="true">
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
