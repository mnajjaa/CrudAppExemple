@extends("layouts.master")

@section("contenu")
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
   
    <div class="lh-1">
      
    </div>
  </div>

  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Ajout d'un nouvel etudiant</h3>
  
    <div  class=" mt-4">
@if (session()->has("success"))
  <div class="alert alert-success">
    <p>  {{ session()->get('success') }}</p>
  </div>
@endif

        @if ($errors->any())
            
      <div  class="alert alert-danger">
   <ul>
    @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
    @endforeach
   </ul>
</div>
   @endif
        <form style="width:65%;" method="POST" action="{{ route('etudiant.ajouter') }}" >

        @csrf <!-- pour securiser l'envoi de donnée sans ça laravel ne pourra pas traiter votre formulaire -->
       
        <div class="mb-3">
          <label for="exampleInputEmail1"  class="form-label">Nom de l'etudiant</label>
          <input type="text" class="form-control" name="nom" required>
         
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom"  required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Classe</label>
            <select class="form-control" name="classe_id" required>
                <option value=""></option>
          @foreach ($classes as $classe )
              <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
          @endforeach
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('etudiant') }}" class="btn btn-danger">Annuler</a>
      </form>
</div>
 
   </div>
  
  </div>

  
  @endsection