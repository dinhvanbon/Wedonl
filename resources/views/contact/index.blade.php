@extends('layouts.layouts')
@section('title','Liên hệ')
@section('content')
<div class="container mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold mb-6 text-center">Liên hệ với 2PSS Sneaker</h1>
    
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4">Thông tin liên hệ</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <p class="mb-2"><strong>Địa chỉ:</strong> 123 Nguyễn Huệ, Quận 1, TP.HCM</p>
                    <p class="mb-2"><strong>Điện thoại:</strong> (028) 1234 5678</p>
                    <p class="mb-2"><strong>Email:</strong> info@2pss.com</p>
                </div>
                <div>
                    <p class="mb-2"><strong>Giờ làm việc:</strong></p>
                    <p class="text-sm">Thứ 2 - Thứ 6: 8:00 - 18:00</p>
                    <p class="text-sm">Thứ 7 - Chủ nhật: 9:00 - 17:00</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Gửi tin nhắn cho chúng tôi</h2>
            <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                @csrf
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div>
                    <label class="block text-sm font-medium mb-2">Họ và tên</label>
                    <input type="text" name="name" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" name="email" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Tiêu đề</label>
                    <input type="text" name="subject" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-sm font-medium mb-2">Nội dung</label>
                    <textarea name="message" rows="5" required class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Gửi tin nhắn
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
