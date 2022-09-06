<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compose Mail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="compose" method="POST">
                        @csrf
                        <div class="m-4">
                            <span class="text-gray-700">Sender</span>
                            <input type="email" class="form-input px-4 py-3 rounded-full"
                                value="{{ Auth::user()->email }}" name="sender" readonly>
                        </div>
                        <div class="m-4">
                            <span class="text-gray-700">Receiver</span>
                            <input type="email" class="form-input px-4 py-3 rounded-full"
                                placeholder="Receiver's Email" name="receiver" />
                        </div>
                        <div class="m-4">
                            <span class="text-gray-700">Subject</span>
                            <input type="text" class="mt-1 block w-full" placeholder="Subject" name="subject" />
                        </div>
                        <div class="m-4">
                            <span class="text-gray-700">Subject</span>
                            <input type="hidden" class="mt-1 block w-full" placeholder="Subject" value="0" name="spam" />
                        </div>
                        <div class="m-4">
                            <span class="text-gray-700">Message</span>
                            <textarea class="mt-1 block w-full" rows="3" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="m-4">
                            <button
                                class="bg-yellow-400 p-3 rounded hover:bg-red-500 hover:text-white text-white">SEND</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
