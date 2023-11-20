@extends('admin.layout_list')

@section('content')
<div class="container mx-auto p-8">
    <main class="flex justify-between items-center mb-6">
        <a href="index.html" class="text-2xl font-semibold no-underline text-black">
            Response Pengguna
        </a>
    </main>
    
    <table id="myTable" class="table-auto w-full border-collapse border ">
        <thead>
            <tr>
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">First Name</th>
                <th class="px-4 py-2">Last Name</th>
                <th class="px-4 py-2">Resiko</th>
                <th class="px-4 py-2">Total Poin</th>
                <th class="px-4 py-2">Tanggal Tes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tests as $test)
            @php
                $poin = $test->testDetails->sum('poin');
            @endphp
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$test->user->first_name}}</td>
                    <td>{{$test->user->last_name}}</td>
                    @if ($poin >= 12)
                        <td>Tinggi</td>
                    @elseif ($poin >= 6 && $poin >= 11)
                        <td>Sedang</td>
                    @else
                        <td>Rendah</td>
                    @endif
                    <td>{{$poin}}</td>
                    <td>{{Carbon\Carbon::parse($test->date)->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection