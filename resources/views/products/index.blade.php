<x-layout>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New Product</a>
    @foreach ($produkto as $prod )

        <h2><a href="{{ route('products.show', $prod->id) }}">{{ $prod->name }}</a></h2>
        <p>{{ $prod->description }}</p>
        <p>{{ $prod->size }}</p>
        
    @endforeach

    {{ $produkto->links('vendor/pagination/simple-default') }}
</x-layout>