<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="w-full bg-gray-200 flex justify-center">
        <section id="receptionist-login"
            class="w-[450px] group flex flex-shrink-0 overflow-hidden  justify-start dark:bg-gray-900 transition-transform duration-500">
            <div id="receptionist-form"
                class="flex flex-col w-[450px]  transition   items-center justify-center  md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-12 mr-2" src="/img/sitamu.png" alt="logo">
                    <h5 class="text-klipaa font-semibold">Sitamu</h5>
                </a>
                <div
                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Login Form
                        </h1>
                        <div class="text-red-500 text-md">{{ session('login') }}</div>
                        <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                            @csrf
                            <div>
                                <label for="username"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input type="text" name="username" id="username"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-[#65AE3A] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hover:brightness-90">Sign
                                in</button>
                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layout>