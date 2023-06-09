<x-layout>


    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto bg-gray-100 border border-gray-200 p-8 rounded-xl">
            <h1 class="text-center font-bold text-xl"> Log in!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input class="border border-gray-400 p-2 w-full" type="text"
                           name="email" id="email" required value="{{ old('email') }}">

                    @error('email')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror

                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input class="border border-gray-400 p-2 w-full" type="password"
                           name="password" id="password" required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">Log In</button>

                </div>
            </form>
        </main>
    </section>
</x-layout>
