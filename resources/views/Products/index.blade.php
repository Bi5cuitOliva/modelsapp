<h1>Products list</h1>
@csrf
<ul>
    @foreach ($products as $product )
    <p>{{$product->name}} - {{$product->description}} - {{$product->price}}

    </p>

    @endforeach
</ul>
