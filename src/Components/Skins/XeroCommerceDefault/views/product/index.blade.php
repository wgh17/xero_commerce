@foreach ($products as $product)
    <a href="{{ route('xero_commerce::product.show', ['slug' => $product->getSlug()]) }}">{{ $product->name }}<p></p></a>
@endforeach
