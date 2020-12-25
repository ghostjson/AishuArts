<html>
    <title>Shipped Order</title>

    <body style="background: ghostwhite; margin-top: 20px">
        <div class="heading" style="text-align: center">
            <h2>AishuArts</h2>
        </div>
        <div class="card" style="background: white; margin: 5%; padding: 5%">
            <div class="card-content">
                <h3>Order Shipped</h3>
                <p>
                    Your order #{{ $order->id }} has been shipped!
                </p>
                <div style="margin-bottom: 10px;background-color: #0a0c0d;color: white; width: fit-content; padding: 10px;">
                   <a href="{{ route('client.orders.current') }}" style="color: white !important;width: content-box; text-decoration: none">View Order</a>
                </div>
            </div>

            <div class="card-bottom" style="margin-top: 20px">
                <small>
                    Thanks <br>
                    AishuArts
                </small>
            </div>
        </div>

    </body>
</html>
