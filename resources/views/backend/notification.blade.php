@php
    use App\Models\Shipping;
    use App\Models\Product;

    if (isset($unreadNotification)) {
        $unreadNotification = $unreadNotification;
        $users = $users;
    }else {
        $unreadNotification = auth()->user()->unreadnotifications;
        foreach ($unreadNotification as $dataInfo){

            $users = Shipping::with('ShippingUser')->where('id', $dataInfo->data['shipping_id'])->first();
            $products = Product::where('id', $dataInfo->data['product_id'])->first();
        }
    }
    // print_r($users);
    // die;
@endphp
{{-- @if (!empty($unreadNotification))
 ace {{$unreadNotification}}
@else
 nai
@endif --}}
@foreach ($unreadNotification as $notification)
    {{-- @if ($notification->id != "") --}}

        <a href="{{ url('read_notification/' . $notification->id) }}" class="media-list-link read clearfix">
            <div class="media pd-x-20 pd-y-15">
                {{-- @if (!empty($users->images))

                    <img src="{{ url('Pro_images/1/'.$users->images) }}" class="wd-40 rounded-circle" alt="">
                @endif --}}
                <img src="{{ url('Pro_images/1/'.$users['ShippingUser']['images']) }}" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                    <p class="tx-13 mg-b-0 tx-gray-700">
                        <strong class="tx-medium tx-gray-800"> {{ $users['ShippingUser']['name'] }}</strong> order <span class="text-info">{{ $products['title'] }}</span> .
                        {{-- <strong> {{ $notification->data['order_id'] }} </strong> --}}
                    </p>
                    <span class="tx-12">{{ $users['updated_at'] }}</span>
                </div>

            </div><!-- media -->

        </a>
    {{-- @else
        <h3>No new notification</h3>
    @endif --}}
@endforeach
