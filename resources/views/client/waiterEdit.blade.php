@extends('client.layouts.backend')
@section('title', 'Master')
@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Waiter</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item">Masters</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/client/masters/waiter">Waiter</a>
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
                <h2>Edit</h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                    <form method="POST" action="/client/masters/waiter/{{$waiter->id}}">
                    @csrf
                    <tbody>
                        <input type="hidden" name="id" class="form-control" value="{{$waiter->id}}">
                        <tr>
                            <td class="block-title">Waiter Name</td>
                            <td><input type="text" name="name" class="form-control" value="{{$waiter->name}}">
                            @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Email ID</td>
                            <td><input type="email" name="email" class="form-control" value="{{$waiter->email}}">
                            @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Mobile</td>
                            <td><input type="number" name="mobile" class="form-control" value="{{$waiter->mobile}}">
                            @if ($errors->has('mobile'))
                                <span class="error">{{ $errors->first('mobile') }}</span>
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Status</td>
                            <td>
                            <select name="status" class="form-control" id="">
                                @if($waiter->status == 1)
                                <option value="1">Active</option>
                                @else
                                <option value="0">Ban</option>
                                @endif
                                @if($waiter->status != 1)
                                <option value="1">Active</option>
                                @else
                                <option value="0">Ban</option>
                                @endif
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                            <button class="btn btn-success">Save</button>
                            </td>
                        </tr>
                    </tbody>
                    </form>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
