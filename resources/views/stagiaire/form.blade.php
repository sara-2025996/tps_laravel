 @csrf

     
 <div class="mt-3">
     <label for="">nom</label>
     <input type="text" name="nom" value="{{old('nom',$stagiaire->nom ?? '') }}"  
     class="form-control @error('nom') is-invalid @enderror " id="">
     @error('nom')
         <p>{{$message}}</p>
     @enderror
 </div>
 <div class="mt-3">
       <label for="">genre</label>
     <input type="text" name="genre" value="{{old('genre',$stagiaire->genre ?? '')}}" 
     class="form-control @error('genre') is-invalid @enderror" id="">
      @error('genre')
         <p>{{$message}}</p>
     @enderror
 </div>
 <div class="mt-3">
       <label for="">note</label>
     <input type="number" name="note" value="{{old('note',$stagiaire->note ?? '')}}" 
     class="form-control  @error('note') is-invalid @enderror " id="">
      @error('note')
         <p>{{$message}}</p>
     @enderror
 </div>