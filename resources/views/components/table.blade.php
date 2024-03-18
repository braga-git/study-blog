@props(['tableHead', 'tableData', 'editRouteAndParam', 'deleteRouteAndParam'])

<table class="w-full table-auto rounded-sm">
    <thead>
        <tr>
            @foreach ($tableHead as $header)
                <td class="px-4 py-4 border-b border-gray-300 font-semibold">{{ ucfirst(trans($header)) }}</td>
            @endforeach
            <td class="py-4 border-b border-gray-300 font-semibold"></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $data)
            <tr class="border-gray-300">
                @foreach ($tableHead as $key => $value)
                    <td class="px-4 py-4 border-t border-b border-gray-300">
                        <p>{{ $data[$value] }}</p>
                    </td>
                @endforeach
                <td class="border-t border-b border-gray-300">
                    <div class="flex gap-5 justify-end">
                        <button class="text-gray-700">
                            <a href="{{ route($editRouteAndParam, [explode('.', $editRouteAndParam)[0] => $data->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </button>
                        <form method="POST" autocomplete="off" action="{{ route($deleteRouteAndParam, [explode('.', $deleteRouteAndParam)[0] => $data->id]) }}" class="text-red-500">
                            @csrf
                            @method('DELETE')
                            <button><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
