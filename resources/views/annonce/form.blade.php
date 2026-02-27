
        @csrf

        <div class="row">

            {{-- col 1 --}}
            <div class="col-6">

                <div class="mt-3">
                    <label>Titre</label>
                    <input type="text" name="titre" value="{{old('titre',$annonce->titre?? '')}}" class="form-control">
                </div>

                <div class="mt-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="5">
                        {{old('description',$annonce->description?? '')}}
                    </textarea>
                </div>

                <div class="mt-3">
                    <label>Type</label>
                    <select name="type"  class="form-control">
                        <option value="">type</option>
                        <option value="appartement" {{ old('type', $annonce->type ?? '') == 'appartement' ? 'selected' : '' }}  >Appartement</option>
                        <option value="maison"   {{ old('type', $annonce->type ?? '') == 'maison' ? 'selected' : '' }}  >Maison</option>
                        <option value="villa"   {{ old('type', $annonce->type ?? '') == 'villa' ? 'selected' : '' }} >Villa</option>
                        <option value="magasin"   {{ old('type', $annonce->type ?? '') == 'magasin' ? 'selected' : '' }}  >Magasin</option>
                        <option value="terrain"  {{ old('type', $annonce->type ?? '') == 'terrain' ? 'selected' : '' }}  >Terrain</option>
                    </select>
                </div>

                
            </div>
            
            {{-- col 2 --}}
            <div class="col-6">
                <div class="mt-3">
                    <label>Ville</label>
                    <input type="text" value="{{old('ville',$annonce->ville?? '')}}" name="ville" class="form-control">
                </div>

                <div class="mt-3">
                    <label>Superficie </label>
                    <input type="number" value="{{old('superfice',$annonce->superfice?? '')}}" name="superfice" class="form-control">
                </div>

                <div class="mt-3">
                    <label>Etat</label><br>
                    <input type="radio" {{ old('etat', $annonce->etat ?? '') == '1' ? 'checked' : '' }} name="etat" value="1"> Neuf
                    <input type="radio" {{ old('etat', $annonce->etat ?? '') == '0' ? 'checked' : '' }} name="etat" value="0"> Ancien
                </div>

                <div class="mt-3">
                    <label>Prix</label>
                    <input type="number" value="{{old('prix',$annonce->prix?? '')}}" step="0.01" name="prix" class="form-control">
                </div>

                @if(isset($annonce) && $annonce->image)
    <div class="mt-2">
        <img src="{{ asset('storage/'.$annonce->image) }}" width="120">
    </div>
@endif
                 <div class="mt-3">
                    <label>image</label>
                    <input type="file"   name="image" class="form-control">
                </div>

            </div>

        </div>

        