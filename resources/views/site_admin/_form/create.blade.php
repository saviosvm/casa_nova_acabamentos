
<!-- criar uma pagina para adicionar as imagens e legendas, serão varios create-->
<form action="{{route('site-admin.store')}}" method="POST">
    @csrf
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Conteudo</label>
    <textarea class="form-control" name="conteudo" rows="3"></textarea>
  </div>

  <button type="submit">Salvar</button>
    
</form>