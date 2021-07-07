<x-guest-layout>

    <div class="flex justify-center items-center h-screen mx-auto bg-gray-100">

        <form method="POST" action="{{ route('contact.store') }}" class="w-full md:w-3/4 lg:w-3/6 p-4"
              enctype="multipart/form-data">
            @csrf
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative m-3"
                     role="alert">
            <span class="block sm:inline">
                {!! session()->get('success') !!}
            </span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                </div>
            @endif
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-3"
                     role="alert">
            <span class="block sm:inline">
                @foreach($errors->all() as $errorTxt)
                    <li>{{ $errorTxt }}</li>
                @endforeach
            </span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                </div>
            @endif
            <div class="p-3">
                <input class="block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none
                focus:ring-2 focus:ring-light-blue-300" type="text" placeholder="Name" name="name" required>
            </div>
            <div class="p-3">
                <input class="block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none
                focus:ring-2 focus:ring-light-blue-300" type="email" placeholder="Email" name="email" required>
            </div>
            <div class="p-3">
                <input class="block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700 leading-5 focus:outline-none
                focus:ring-2 focus:ring-light-blue-300" type="number" placeholder="Mobile Number" name="phone_number"
                       required>
            </div>
            <div class="p-3">
                <textarea class="resize-none border rounded-md block appearance-none placeholder-gray-500 placeholder-opacity-100 border border-light-blue-400 rounded-md w-full py-3 px-4 text-gray-700
                leading-5 focus:outline-none focus:ring-2 focus:ring-light-blue-300 h-56" placeholder="Message"
                          name="message" required></textarea>
            </div>
            <div class="p-3 pt-4">
                <button type="submit"
                        class="w-full bg-gray-700 hover:bg-gray-900 text-white font-bold py-3 px-4 rounded text-2xl">
                    Send
                </button>
        </form>
    </div>
</x-guest-layout>
