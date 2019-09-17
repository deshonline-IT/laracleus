@extends('nuclues::backend.layouts.app')
@section('title','order')

@push('css')
<style>
  .pagination {
    position: absolute;
    top: -25px;
    right: 4px;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    border-color: rgba(0,0,0,0);
    background: rgba(0,0,0,0) linear-gradient(45deg, #6878E2, #7356B2);
}
img.order-image {
    width: 88px;
    height: 67px;
}
</style>
@endpush
@section('content')
     <div class="panel-body">
              
      <div class="content-area">
        <div class="sub-bar">
          <div class="sub-title">
            <h4>Dashboard:</h4>
            <span>Welcome To order</span>
          </div>
          <ul class="bread-crumb">
            <li><a href="#" title="">Dashboard</a></li>
            <li>order</li>
          </ul>
        </div>
        <div class="gap inner-bg">
          <div class="element-title">
            <h4>order</h4>
            <span>It's your order list </span> </div>
          <div class="table-styles">
            <div class="widget">
              <table class="prj-tbl striped table-responsive">
                <thead class="color">
                  <tr>
                    <th><em>ID</em></th>
                    <th><em>Customer</em></th>
                    <th><em>Payment</em></th>
                    <th><em>Delivery</em></th>
                    <th><em>Order</em></th>
                    <th><em>Currency</em></th>
                    <th><em>Total</em></th>
                    <th><em>Action</em></th>
                  </tr>
                </thead>
                <tbody>
                    @if($orders->count() > 0)
                    @foreach($orders as $key=>$order)
                      <tr>
                        <td><span>{{ $key + 1 }}</span></td>
                        <td><i>{{ App\User::where('id',$order->user_id)->first()->name }}</i></td>
                        <td><span>
                          @if($order->payment_status == 0)
                          <a href="{{ route('order.payment_approved',$order->id) }}" class="btn-st rd-30 rd-clr">pending</a>
                          @else
                            <a href="{{ route('order.payment_status',$order->id) }}" class="btn-st rd-30">Approved</a>
                          @endif
                        </span></td>
                   
                        <td><span>
                          @if($order->delivery_status == 'approved')
                          <a href="{{ route('order.delivery_approved',$order->id) }}" class="btn-st rd-30">Published</a>
                          
                          @else
                            <a href="{{ route('order.delivery_status',$order->id) }}" class="btn-st rd-30 org-clr">Pending</a>
                          @endif
                        </span></td>
                        <td><span>
                          @if($order->payment_status == 1 && $order->delivery_status == 'approved')
                          <span href="" class="btn-st rd-30 org-clr">Finished</span>
                          @else
                            <span href="" class="btn-st rd-30">Active</span>
                          @endif
                        </span></td>
                        <td><span>{{ $order->currency_type }}</span></td>
                        <td>{{ $order->amount }}</td>
                        <td><i>
                            <a href="{{ route('order.edit',$order->id) }}" class="btn-st blu-clr"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('order.delete',$order->id) }}" class="btn-st rd-clr"><i class="fa fa-trash"></i></a>
                        </i></td>

                      </tr>
                  @endforeach
                    <div class="pagination">
                      {!! $orders->links() !!}
                    </div>
                  @else
                  <tbody>
                      <tr>
                          
                      </tr>
                  </tbody>
                  @endif
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
      <div class="bottombar"> 
                            <span>© 2019. Dewwater. All Rights Reserved.</span>
                        </div>
      <!-- bottombar --> 
    </div>
@endsection