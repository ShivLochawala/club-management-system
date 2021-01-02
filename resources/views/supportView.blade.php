@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">Support</h1>
                
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/support">Support</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="/support/{{$client_supports->id}}">View</a>
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
                <h2>Support</h2>
            </div>
            @if($msgsucc)
                <span class="succ">{{ $msgsucc }}</span>
            @endif
            <div class="block-content">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="block-title">Date</td>
                            <td>{{$client_supports->date}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Company Name</td>
                            @foreach ($clients as $client)
                                @if($client->id == $client_supports->client_id)
                                <td>{{$client->company_name}}</td>
                                @endif
                            @endforeach
                        </tr>
                        <tr>
                            <td class="block-title">Subject</td>
                            <td>{{$client_supports->client_subject}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Description</td>
                            <td>{{$client_supports->client_description}}</td>
                        </tr>
                        @if($client_supports->admin_subject != "" && $client_supports->admin_description != "")
                        <tr>
                            <td class="block-title">Reply Subject</td>
                            <td>{{$client_supports->admin_subject}}</td>
                        </tr>
                        <tr>
                            <td class="block-title">Reply Description</td>
                            <td>{{$client_supports->admin_description}}</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    @if($client_supports->admin_subject == "" && $client_supports->admin_description == "")
    <div class="content-full">
        <!-- Your Block -->
        <div class="block block-rounded">
            <div class="block-header">
                <h2>Give Reply</h2>
            </div>
            <div class="block-content">
                <table class="table">
                    <tbody>
                        <form action="/support/reply" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$client_supports->id}}">
                        <tr>
                            <td class="block-title">Subject</td>
                            <td>
                                <input type="text" class="form-control" name="admin_subject" value="{{old('admin_subject')}}">
                                @if ($errors->has('admin_subject'))
                                    <span class="error">{{ $errors->first('admin_subject') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="block-title">Description</td>
                            <td>
                                <textarea name="admin_description" class="form-control" id="" cols="" rows="5">{{old('admin_description')}}</textarea>
                                @if ($errors->has('admin_description'))
                                    <span class="error">{{ $errors->first('admin_description') }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:right;">
                                <button class="btn btn-primary">Reply</button>
                            </td>
                        </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    @endif
    <!-- END Page Content -->
@endsection
