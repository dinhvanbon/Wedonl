@extends('layouts.app')
@section('title','Thank you')
@section('content')
<h2>Cảm ơn!</h2>
<p>Đơn hàng của bạn đã được ghi nhận.</p>
<pre>{ print_r($order) }</pre>
@endsection
