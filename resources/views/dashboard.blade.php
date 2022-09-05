<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Mails') }}
        </h2>
    </x-slot>

 <div class="grid grid-cols-1 divide-y bg-black opacity-50 divide-black-400 hover:divide-black-400">
    <div class="hover:bg-white hover:text-black text-white">
        <div class="grid grid-cols-7 gap-4 content-start">
            <div >ID</div>
            <div>SENDER</div>
            <div>RECEIVER</div>
            <div>SUBJECT</div>
            <div>MESSAGE</div>
            <div>SPAM</div>
            <div>SENT DATE</div>
        </div>
  </div>
    @foreach($mails as $mail)
  <div class="hover:bg-white hover:text-black text-white">
        <div class="grid grid-cols-7 gap-4 content-start">
            <div >{{$mail['id']}}</div>
            <div>{{$mail['sender']}}</div>
            <div>{{$mail['receiver']}}</div>
            <div>{{$mail['subject']}}</div>
            <div>{{$mail['message']}}</div>
            <div>{{$mail['spam']}}</div>
            <div>{{$mail['sent_date']}}</div>
        </div>
  </div>
      @endforeach
</div>
</x-app-layout>
