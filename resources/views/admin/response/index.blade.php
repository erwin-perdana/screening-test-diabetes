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
                <th class="px-4 py-2">Answers</th>
                <th class="px-4 py-2">Poin</th>
                <th class="px-4 py-2">Tanggal Tes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testDetails as $testDetail)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$testDetail->test->user->first_name}}</td>
                    <td>{{$testDetail->test->user->last_name}}</td>
                    <td>{{ isset($testDetail->option) ? $testDetail->option->information : $testDetail->option_information}}</td>
                    <td>{{$testDetail->poin}}</td>
                    <td>{{Carbon\Carbon::parse($testDetail->test->date)->format('d/m/Y')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection