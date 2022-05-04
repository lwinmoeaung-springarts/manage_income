<x-layouts.app>
    <x-slot name="title">
        <title>Manage Income</title>
    </x-slot>


    <div>
        <p>Manage Income</p>
        <table class="table table-bordered">
            <tbody>
                @foreach ($manageincomes as $manageincome)
                    <tr>
                        {{-- <th>{{ $manageincome->save_id }}</th>
                        <td>{{ $manageincome->item }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.app>
