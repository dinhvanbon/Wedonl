@extends('layouts.layouts')
@section('meta_title', 'Giỏ hàng - 2PSS Sneaker')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Giỏ hàng của bạn</h1>
    
    @if(empty($cart))
        <div class="text-center py-16">
            <div class="mb-4">
                <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <p class="text-xl text-gray-600 mb-4">Giỏ hàng trống</p>
            <a href="{{ route('products.index') }}" class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                Tiếp tục mua sắm
            </a>
        </div>
    @else
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sản phẩm</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Giá</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Số lượng</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thành tiền</th>
                                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @php $total = 0; @endphp
                                @foreach($cart as $id => $item)
                                    @php $subtotal = $item['price'] * $item['quantity']; $total += $subtotal; @endphp
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img src="{{ asset($item['image'] ?: 'https://via.placeholder.com/80') }}" 
                                                     alt="{{ $item['name'] }}" 
                                                     class="w-20 h-20 object-cover rounded-lg mr-4">
                                                <div>
                                                    <h3 class="text-sm font-medium text-gray-900">{{ $item['name'] }}</h3>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">{{ number_format($item['price'],0,',','.') }} đ</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <form method="POST" action="{{ route('cart.update') }}" class="inline">
                                                @csrf
                                                <input type="number" name="quantities[{{ $id }}]" value="{{ $item['quantity'] }}" 
                                                       min="1" max="99" 
                                                       class="w-20 px-2 py-1 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"
                                                       onchange="this.form.submit()">
                                            </form>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="text-sm font-medium text-gray-900">{{ number_format($subtotal,0,',','.') }} đ</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <form method="POST" action="{{ route('cart.remove') }}" class="inline">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $id }}">
                                                <button type="submit" class="text-red-600 hover:text-red-900 transition">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Tóm tắt đơn hàng</h2>
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tạm tính:</span>
                            <span class="font-medium">{{ number_format($total,0,',','.') }} đ</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phí vận chuyển:</span>
                            <span class="font-medium">Miễn phí</span>
                        </div>
                        <div class="border-t pt-2">
                            <div class="flex justify-between">
                                <span class="text-lg font-semibold">Tổng cộng:</span>
                                <span class="text-lg font-bold text-indigo-600">{{ number_format($total,0,',','.') }} đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <a href="{{ route('cart.checkout') }}" 
                           class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg hover:bg-indigo-700 transition text-center block">
                            Tiến hành thanh toán
                        </a>
                        <a href="{{ route('products.index') }}" 
                           class="w-full bg-gray-200 text-gray-800 py-3 px-4 rounded-lg hover:bg-gray-300 transition text-center block">
                            Tiếp tục mua sắm
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
