<div class="content">
    <div class="row justify-content-center">
    @for($i = 1; $i <= $client_pub_tables->number_of_tables; $i++)
        @if($i%2 == 0)
        <div class="col-md-3">
            <a href="/{{session()->get('client-slug')}}/manager/table-info/{{$i}}/1" style="color:gray;" data-toggle="modal" data-target="#add-member">
                <div class="block content-full">
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-secondary">{{$i}}</button>
                        </div>
                        <div class="col-md-10 text-left">
                            Empty <br>
                            <small>15 Minutes</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @elseif($i%3 == 0)
        <div class="col-md-3">
            <a href="/{{session()->get('client-slug')}}/manager/order-take">
                <div class="block content-full">
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-danger">{{$i}}</button>
                        </div>
                        <div class="col-md-10 text-left">
                            <div style="color:red;">Seated</div>
                            <small style="color:gray;">10 Minutes</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @elseif($i%5 == 0)
        <div class="col-md-3">
            <a href="/{{session()->get('client-slug')}}/manager/order-info">
                <div class="block content-full">
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-warning">{{$i}}</button>
                        </div>
                        <div class="col-md-10 text-left">
                            <div style="color:orange;">Ordered</div>
                            <small style="color:gray;">07 Minutes</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @else
        <div class="col-md-3">
            <a href="/{{session()->get('client-slug')}}/manager/billing">
                <div class="block content-full">
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-success">{{$i}}</button>
                        </div>
                        <div class="col-md-10 text-left">
                            <div style="color:green;">Served</div>
                            <small style="color:gray;">05 Minutes</small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endif
        
    @endfor
    </div>
</div>