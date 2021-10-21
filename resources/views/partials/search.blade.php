<form action="{{ route('produits.search') }}" class="d-flex justify-content-center">
    <div class="form-group me-3">
        <input type="text" name="search" class="form-control" value="{{ request()->q ?? ""}}">
    </div>
    
    <button type="submit" class="btn btn-warning">Cherchez</button>
</form>