 <x-adminlayout>
 <form action="{{route('updateMessage',$updateData->id)}}" method="post">
            @csrf
                <p class="text-center text-primary ">Update Message</p>

                <!-- userName -->
                <input type="text" id="form1Example2" name="username" value="{{$updateData->username}}" class="form-control mt-4 mb-4" placeholder="UserName" />
                    @error('username')
                    <p class="text-danger">{{$message}} </p>

                     @enderror
          
                <!-- Email input -->

                  <input type="email" name="email" value="{{$updateData->email}}" id="form1Example1" class="form-control mt-4 mb-4" placeholder="Email" />
                        @error('email')
                        <p class="text-danger">{{$message}} </p>

                        @enderror 
              <!-- message -->
                <textarea name="message" id="" cols="30" rows="10" class="form-control mt-4 mb-4" placeholder="your message">
                
               
                {{$updateData->messages}}
                
                </textarea>
                 @error('message')
                <p class="text-danger">{{$message}} </p>

                @enderror
              
              
                
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
              </form>
              </x-adminlayout>
