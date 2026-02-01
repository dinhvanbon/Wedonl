@extends('layouts.app')
@section('title','Products')
@section('content')
<h2>Products</h2>
<div style="display:flex;flex-wrap:wrap">
@foreach($products as $p)
    <div style="width:200px;margin:10px;border:1px solid #ddd;padding:8px">
        <img src="{ asset($p->image ?: 'https://via.placeholder.com/150') }" alt="{ $p->name }" style="width:100%;height:120px;object-fit:cover">
        <h4>{ $p->name }</h4>
        <p>{ number_format($p->price,0,',','.') } VND</p>
        <form method="POST" action="{ route('cart.add') }">
            @csrf
            <input type="hidden" name="product_id" value="{ $p->id }">
            <button type="submit">Add to cart</button>
        </form>
        <a href="{ route('products.show', $p->id) }">Details</a>
    </div>
@endforeach
</div>
{ $products->links() }
@endsection
