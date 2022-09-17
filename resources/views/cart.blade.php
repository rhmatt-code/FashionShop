
{{-- <div class="uk-container">
    <h1>Cart Product</h1>
    <ul class="uk-child-width-1-4@m uk-grid">
        @if ($transaction)
            @foreach($transaction->details as $detail)
            <li>
                <div class="uk-card uk-card-default uk-box-shadow-small uk-box-shadow-hover-large">
                    <div class="uk-card-media-top uk-cover-container">
                        <img src="{{asset('storage/product/' . $detail->product->image)}}" uk-cover>
                        <canvas width="50"></canvas>
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">{{$detail->product->name}}</h3>
                        <p>Total Item: {{$detail->amount}}</p>
                        <h4>Rp. {{$detail->amount * $detail->product->price}}</h4>
                        <form action="{{url('cart/add', $detail->product->id)}}" class="uk-text-center" method="GET">
                            @csrf
                            @method("GET")
                            <input type="text" class="uk-hidden" value="1" name="qty">
                            <button class="uk-button uk-button-default">Add</button>
                        </form>
                        <form action="{{url('cart/delete', $detail->id)}}" class="uk-text-center" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="uk-button uk-button-default">Remove</button>
                        </form>
                    </div>
                </div>
            </li>
            @endforeach

        @endif
    </ul>
    <h2><strong>Total Harga: </strong>Rp.  {{$totalproduct}}</h2>
</div> --}}



        <div id="modal-cart" uk-modal>
            <div class="uk-modal-dialog">

                <div class="uk-text-center uk-heading-line uk-container">
                    <h2 class="uk-modal-title">Cart</h2>
                </div>

                <div class="uk-modal-body" uk-overflow-auto>
                    <ul class="uk-nav uk-nav-small">
                        @if ($transaction)
                            @foreach($transaction->details as $detail)
                                {{-- <li class="uk-active uk-margin">
                                    <div class="uk-card uk-card-default uk-margin uk-width-1-2"uk-grid>
                                        <div class="uk-card-media-left uk-cover-container">
                                            <img src="{{asset('storage/product/' .$detail->product->image)}}" height="300">
                                        </div>
                                        <div>
                                            <div class="uk-card-body uk-align-right">
                                                <h3 class="uk-card-title">{{$detail->product->name}}</h3>
                                                <p>Total Item: {{$detail->amount}}</p>
                                                <p><strong>Rp. </strong>{{$detail->amount * $detail->product->price}}</p>
                                                <div class="uk-child-width-1-2@s uk-grid-collapse"uk-grid>
                                                    <form action="{{url('cart/add', $detail->product->id)}}" method="GET">
                                                        @csrf
                                                        @method("GET")
                                                        <input type="text" class="uk-hidden" value="1" name="qty">
                                                        <button class="uk-button uk-button-default uk-button-small">Add</button>
                                                    </form>
                                                    <form action="{{url('cart/delete', $detail->id)}}" class="uk-text-right" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="uk-button uk-button-default uk-button-small">Remove</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="uk-card uk-card-small uk-grid-collapse uk-child-width-1-2@s uk-margin uk-box-shadow-small" uk-grid>
                                        <div class="uk-card-media-left uk-cover-container">
                                            <img src="{{ asset('storage/product/' . $detail->product->image) }}" alt="" uk-cover>
                                            <canvas height="10"></canvas>
                                        </div>
                                        <div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">{{$detail->product->name}}</h3>
                                                <span>Total Item: {{$detail->amount}}</span>
                                                <br>
                                                <span><strong>Rp. </strong>{{$detail->amount * $detail->product->price}}</span>
                                                <br>
                                                <br>
                                                <div class="uk-grid-collapse uk-text-center "uk-grid>
                                                    <form action="{{url('cart/add', $detail->product->id)}}" method="GET">
                                                        @csrf
                                                        @method("GET")
                                                        <input type="text" class="uk-hidden" value="1" name="qty">
                                                        <button class="uk-button uk-button-default uk-button-secondary uk-button-small">Add</button>
                                                    </form>
                                                    <form action="{{url('cart/delete', $detail->id)}}" class="uk-text-right" method="post">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button class="uk-button uk-button-default uk-button uk-button-small">Remove</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            @if($transaction)
                @if(count($transaction->details))
                <div class="uk-modal-footer uk-text-left">
                    <span class="uk-text-large"><strong>Total Harga: </strong>Rp.  {{$totalproduct * $detail->product->price}}</span>
                <div class="uk-align-right">
                    <a href="{{url('cart/checkout', $transaction->id)}}" class="uk-button uk-button-danger" type="button">Checkout</a>
                </div>
                </div>
                @endif
            @endif
            </div>
        </div>
