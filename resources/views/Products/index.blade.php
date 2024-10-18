<h1>Products list</h1>
<ul>
    @foreach ($products as $product )
    <p>{{$product->name}} - {{$product->description}} - {{$product->price}}

    </p>

    @endforeach
</ul>
