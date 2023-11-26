@extends('admin.layout_list')

@section('content')
<div class="container w-full mx-auto px-2">
            
    <div class="flex justify-between mt-20">
            <a href="index.html" class="text-xl ml-8 font-semibold tracking-widest no-underline">
                <span class="text-black">Data Pengguna</span>
            </a>
    </div>
    <!--Card-->
    <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-white">


        <table id="myTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">First Name</th>
                <th class="px-4 py-2">Last Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                </tr>
            @endforeach
        </tbody>

    </table>


    </div>
<!--/Card-->
</div>
@endsection