<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Spam Mails') }}
        </h2>
    </x-slot>

     <div class="grid grid-cols-1 p-3 divide-y bg-black divide-black-400">
        <div class="text-white">
            <div class="grid grid-cols-4 gap-4 content-start">
                {{-- <div >ID</div> --}}
                <div>RECEIVER</div>
                <div>SUBJECT</div>
                <div>MESSAGE</div>
                <div>SENT DATE</div>
            </div>
        </div>
    </div>
 <div class="grid grid-cols-1 p-3 divide-y bg-yellow-400 divide-black-400 hover:divide-black-400">
    @foreach($mails as $mail)
  <div class="hover:bg-white p-3 hover:text-black hover:p-3 text-white">
        <div class="grid grid-cols-4 gap-4 content-start">
            {{-- <div >{{$mail->id}}</div> --}}
            <div>{{$mail->receiver}}</div>
            <div>{{$mail->subject}}</div>
            <div>{{$mail->message}}</div>
            <div>{{$mail->created_at}}</div>
        </div>
  </div>
      @endforeach
</div>
</x-app-layout>
