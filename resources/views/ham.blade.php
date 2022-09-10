<x-app-admin>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ham Mails') }}
        </h2>
    </x-slot>

   <div class="grid grid-cols-1 p-3 divide-y bg-black divide-black-400">
        <div class="text-white">
            <div class="grid grid-cols-6 gap-4 content-start">
                {{-- <div >ID</div> --}}
                <div>SENDER</div>
                <div>RECEIVER</div>
                <div>SUBJECT</div>
                <div>MESSAGE</div>
                <div>SENT DATE</div>
                <div>RECLASSIFY</div>
            </div>
        </div>
    </div>
 <div class="grid grid-cols-1 p-3 divide-y bg-yellow-400 divide-black-400 hover:divide-black-400">
    @foreach($mails as $mail)
  <div class="hover:bg-white p-3 hover:text-black hover:p-3 text-white">
        <div class="grid grid-cols-6 gap-4 content-start">
            {{-- <div >{{$mail->id}}</div> --}}
            <div>{{$mail->sender}}</div>
            <div>{{$mail->receiver}}</div>
            <div>{{$mail->subject}}</div>
            <div>{{$mail->message}}</div>
            <div>{{$mail->created_at}}</div>
             <div><form action="ham" method="POST">
                 @csrf
                <input type="hidden" value="{{$mail->id}}" name="id" />
                <input type="hidden" value="1" name="harm"/>
                <button class="bg-red-400 p-3 rounded hover:bg-red-500 hover:text-white text-white">UPDATE</button>
            </form>
        </div>
  </div>
      @endforeach
</div>
</x-app-admin>
