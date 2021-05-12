<x-adminlayout>
            <form action="{{route('updateUser',$update_user->id)}}" method="post">
            @csrf
                <p class="text-center text-primary ">EDIT USER</p>

                <!-- userName -->
                <input type="text" id="form1Example2" value="{{$update_user->name}}" name="username" class="form-control mt-4 mb-4 text-info" placeholder="UserName" />
                    @error('username')
                    <p class="text-danger">{{$message}} </p>

                     @enderror
          
                <!-- Email input -->

                  <input type="email" name="email" value="{{$update_user->email}}" id="form1Example1" class="form-control mt-4 mb-4 text-info" placeholder="Email" />
                        @error('email')
                        <p class="text-danger">{{$message}} </p>

                        @enderror 

                {{-- isAdmin --}}
                <label for="">isAdmin</label>
                <select name="isAdmin" id=""  class="form-control mt-4 mb-4 text-info">
                    <option value="1" {{$update_user->isAdmin=="1" ? "selected" :""}}>
                        true
                    </option>
                    <option value="0" {{$update_user->isAdmin=="0" ? "selected" :"" }}>
                        false
                    </option>
                </select>
               
                
              {{-- isPremium --}}
              <label for="">isPremium</label>
              <select name="isPremium" id="" class="form-control mt-4 mb-4 text-info">
                <option value="1" {{$update_user->isPremium=="1" ? "selected" :""}}>
                    true
                </option>
                <option value="0" {{$update_user->isPremium=="0" ? "selected" :"" }}>
                    false
                </option>
            </select>
           

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">UPDATE</button>
              </form>
    
</x-adminlayout>