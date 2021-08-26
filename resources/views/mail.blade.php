<div class="box1 border1">
    <div class="title6">Order #{{$order["order_number"]}}</div>    
</div>

    <div class="box17 border1">
    <div class="box17-in">

        <style>
            .delivery-part {
                width: 31%;
                margin-right: 2.333%;
                float: left;
            }

            .delivery-part .header a {
                color: #089dea;
            }

            .delivery-part .header {
                font-size: 16px;
                font-weight: bold;
            }

            .delivery-part p.content {
                margin-top: 10px;
                font-size: 14px;
                background: none;
            }

            .pay-data {
                width: 240px;
                float: left;
            }

            .pay-warning {
                width: calc(100% - 240px);
                float: left;
            }

            .pay-warning a {
                color: #089dea;
            }

            .new-payment p {
                margin-bottom: 15px;
            }
        </style>

        <div class="wrap11">
            <div class="box18-in">
                <div class="box18-in-item">
                    <div class="title19">Payment details:</div>
                        <div style="height:25px;"></div>
                        <div class="new-payment">
                            <div class="pay-data">
                                                                
                                                                                                        </div>
                            <div class="pay-warning">
                                                                        <p>Wallet address:</p>
                                    <p style="font-size:15px;">{{$order["walletaddress"]}}</p>
                                
                            </div>
                            <br clear="all">
                        </div>
                                            <div style="height:40px;"></div>
                    <div class="title19">Delivery:</div>
                    <div style="height:25px;"></div>
                    <div class="new-delivery">
                        <div class="delivery-part">
                            <p class="content">
                                {{$user["fullname"]}}<br>
                                {{$user["addresslin1"]}}<br>
                                {{$user["addresslin2"]}}

                                <br>
                                {{$user["email"]}}
                                <br>
                                                                </p>
                        </div>
                        <div class="delivery-part">
                            <span class="header">Delivery</span>
                            <p class="content">
                                Priority Mail worldwide
                            </p>
                                                                <div style="height:15px;"></div>
                                <span class="header">Tracking number:</span>
                                                                                            </div>
                        <div class="delivery-part">
                            <p class="content comment_content">
                                {{$order["comment"]}}
                            </p>
                          
                        </div>
                        <br clear="all">
                    </div>
                    
                    <div style="height:25px;"></div>
                    <div class="title19">Status: {{$order["status"]}}
                                                       
                                                </div>
                    <div style="height:25px;"></div>
                    <div class="title19">Selected products:</div>

                    <table class="transfer_data desktop_only" border="1" >
                        <thead>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $orderp)
                                <tr class="odd">
                                    <td class="w400" style="text-transform:uppercase;">{{$orderp["title"]}}</td>
                                    <td class="w80">{{$orderp["quantity"]}}</td>
                                    <td class="w150">${{$orderp["price"]}}</td>
                                </tr>
                            @endforeach
                         
                                                                                </tbody>
                    </table>

                    <div class="outer_right">
                        <div class="order-total-delivery weighted">
                            Products total:
                            <span class=" w150">${{$order["producttotal"]}}</span>
                        </div>
                        <div class="order-total-delivery weighted">Bitcoin discount:
                            <span class="w150">{{$order["discount"]}}%</span>
                        </div>                                                                  
                        <div class="order-total-delivery weighted">
                            Delivery:
                            <span class="w150">${{$order["delivery"]}}</span>
                        </div>
                        <div class="order-total-price weighted">
                            Your current balance:
                            <span class="w150">${{$order["delivery"]}}}</span>
                        </div>
                        <div class="order-total-price weighted">
                            Your order total:
                            <span class="w150">${{$order["ordertotal"]}}</span>
                        </div>
                                <div class="order-total-price weighted">
                                Bitcoin total:
                                <span class="w150">{{$order["bitcoin"]}} coins</span>
                            </div>
                                <div class="order-total-price weighted">
                                        Amount left to pay:
                                <span class="w150">$
                                    {{$order["amountleft"]}}
                            </span>
                                        </div>
                                        <div>
                            </div>
                                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

