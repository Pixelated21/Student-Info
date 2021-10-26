<div class="w-full flex flex-col h-full justify-around">
    <div class="flex justify-between  h-full gap-5">
        <select class="w-48 h-8 rounded-md border border-red-800" wire:change="studentsSelect"
                wire:model="studentsList">

            @forelse($student as $stu)
                <option value="{{$stu->id}}">{{$stu->student_name}}</option>
            @empty
            @endforelse
        </select>


        <select class="w-24 h-8 rounded-md border border-red-800">
            @if ($phoneNumberList)
                @forelse($phoneNumberList as $phoneNumber)
                    <option>{{$phoneNumber->phone_number}}</option>

                @empty
                    <option>No Phone Number</option>
                @endforelse

            @else

                @forelse($phoneNumber as $phone)
                    <option>{{$phone->phone_number}}</option>

                @empty
                    <option>No Phone Number</option>
                @endforelse

            @endif

        </select>

        <div class="overflow-y-auto">
            @forelse($student as $stu)
                <div>
                    <div>{{$stu->student_name}}</div>
                    <div>{{$stu->dob}}</div>

                    <button wire:click.prevent="editContact({{$stu->id}})" class="bg-blue-400 px-4 p-2">Edit</button>
                    <button wire:click.prevent="addContact({{ $stu }})" class="bg-green-400 px-4 p-2">Add</button>


                </div>
            @empty
            @endforelse
        </div>

    </div>

    Student Add Form
    <div>
        <form wire:submit="addStudent" method="post" class="border-red-800 border h-3/4">
            <input wire:model="name" class="border border-orange-500" name="name" type="text" placeholder="name">
            <input wire:model="dob" class="border border-orange-500" name="date" type="date">

            <button wire:click.prevent="addStudent" class="border border-red-800">Submit</button>
        </form>
    </div>

    Phone Add Form<div>
        <form wire:submit="addStudentPhone" method="post" class="border-red-800 border h-3/4">

            <select>
                @forelse($student as $stu)
                    <option @if ($name === $stu->student_name)
                        selected
                    @endif value="{{$stu->id}}">{{$stu->student_name}}</option>
                @empty
                @endforelse
            </select>

            <input wire:model="phone" class="border border-orange-500" name="name" type="number" placeholder="number">


            <button wire:click.prevent="student" class="border border-red-800">Add</button>
        </form>


        <form wire:submit="updateContact" method="post" class="border-red-800 border h-3/4">


            <input wire:model="studentId" class="border hidden border-orange-500" name="id" type="text" placeholder="id">

            <input wire:model="name" class="border border-orange-500" name="name" type="text" placeholder="name">

            <input wire:model="dob" class="border border-orange-500" name="dob" type="date" placeholder="dob">



            <button type="button" wire:click="updateContact" class="border border-red-800">update</button>
        </form>
    </div>


</div>



