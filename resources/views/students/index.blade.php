
@include('partials.header')
<?php $array = array('title' => 'Student System')?>
    <x-nav :data="$array"/>
    <header class="max-w-lg mx-auto mt-10">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">Students List</h1>
        </a>
    </header>
    <section class="mt-10">
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs-text gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">First name</th>
                        <th scope="col" class="py-3 px-6">Last name</th>
                        <th scope="col" class="py-3 px-6">email</th>
                        <th scope="col" class="py-3 px-6">age</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $students)
                    <tr class="bg-gray-800 border-b-2 text-white">
                        <td class="py-4 px-6">{{ $students->first_name}}</td>
                        <td class="py-4 px-6">{{ $students->last_name}}</td>
                        <td class="py-4 px-6">{{ $students->email}}</td>
                        <td class="py-4 px-6">{{ $students->age}}</td>

                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>

    </section>
@include('partials.footer')
