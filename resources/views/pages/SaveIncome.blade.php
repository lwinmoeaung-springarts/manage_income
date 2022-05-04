<x-layouts.app>
    <x-slot name="title">
        <title>Save Income</title>
    </x-slot>

    <div>
        <span>
            @if (session('status'))
                <p class="alert alert-success">{{ session('status') }}</p>
            @endif
        </span>
        <form action="{{ route('save-income.store') }}" method="POST">
            {{ csrf_field() }}
            <label for="">Enter Monthly Income Amount</label>
            <input type=" number" name="income">
            <button>Save</button>

        </form>
    </div>
</x-layouts.app>
