@extends('layouts.app')
@section('title',$product->name)
@section('content')
<h2>{ $product->name }</h2>
<img src="{ asset($product->image ?: 'https://via.placeholder.com/300') }" alt="{ $product->name }" style="width:300px;height:300px;object-fit:cover">
<p>{ $product->description }</p>
<p>Price: { number_format($product->price,0,',','.') } VND</p>
<form method="POST" action="{ route('cart.add') }">
    @csrf
    <input type="hidden" name="product_id" value="{ $product->id }">
    <button type="submit">Thêm vào giỏ</button>
</form>
@endsection
