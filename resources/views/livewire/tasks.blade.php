<div>
   <h1>tasks</h1>
   <input type="text" wire:model="task" >

 <button wire:click="add" class="bg-indigo-500 p-2 ">Add </button>


   <ul>
    @foreach($tasks as $task)
    <li>{{$task}}</li>
    @endforeach
   </ul>
</div>