@extends('layouts.app')
@section('title','Checkout')
@section('content')
<h2>Thanh toán</h2>
<form method="POST" action="{ route('cart.checkout.submit') }">
    @csrf
    <label>Tên</label><input name="name" required>
    <label>Email</label><input name="email" type="email" required>
    <label>Địa chỉ</label><input name="address" required>
    <button type="submit">Gửi đơn</button>
</form>
@endsection
