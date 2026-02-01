<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function add(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->image,
            ];
        }
        Session::put('cart', $cart);
        return redirect()->route('cart.index')->with('success','Đã thêm sản phẩm vào giỏ hàng');
    }

    public function update(Request $request)
    {
        $cart = Session::get('cart', []);
        $data = $request->input('quantities', []);
        foreach($data as $id => $qty){
            if(isset($cart[$id])) $cart[$id]['quantity'] = max(1, (int)$qty);
        }
        Session::put('cart', $cart);
        return back()->with('success','Cập nhật giỏ hàng thành công');
    }

    public function remove(Request $request)
    {
        $id = $request->input('product_id');
        $cart = Session::get('cart', []);
        if(isset($cart[$id])) unset($cart[$id]);
        Session::put('cart', $cart);
        return back()->with('success','Đã xóa sản phẩm khỏi giỏ hàng');
    }

    public function checkoutForm() {
        $cart = Session::get('cart', []);
        return view('cart.checkout', compact('cart'));
    }

    public function checkoutSubmit(Request $request) {
        // minimal offline order creation
        $cart = Session::get('cart', []);
        $order = [
            'items' => $cart,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
        ];
        // clear cart
        Session::forget('cart');
        return view('cart.thankyou', compact('order'));
    }

    public function showMomoQR($order) {
        // placeholder: in real integration you'd generate QR
        return view('cart.momo_qr', compact('order'));
    }
}
