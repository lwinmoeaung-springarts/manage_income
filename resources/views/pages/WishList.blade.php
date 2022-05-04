<x-layouts.app>
    <x-slot name="title">
        <title>Wish Lists</title>
    </x-slot>

    <div>
        <div class="row">
            <span>
                @if (session('status'))
                    <p class="alert alert-success">{{ session('status') }}</p>
                @endif
            </span>

            <form action="{{ route('wish-list.store') }}" method="POST">
                {{ csrf_field() }}
                <label for="">Enter Item</label>
                <input type=" text" name="item">
                <label for="">Enter price</label>
                <input type="number" name="price">
                <button>Add</button>
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>item</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wishlists as $wishlist)
                        <tr>
                            <th>{{ $wishlist->save_id }}</th>
                            <td>{{ $wishlist->item }}</td>
                            <td>{{ $wishlist->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <div class="pagination justify-content-center align-items-center">
                {{ $wishlists->links() }}
            </div>
            <div>
            </div>
</x-layouts.app>
