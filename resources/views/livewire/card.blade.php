<p @click="livewire.emit('postAdded' , 
'{{$incomments->id}}',
'{{auth()->user()['id']}}')">ADD CARD</p>