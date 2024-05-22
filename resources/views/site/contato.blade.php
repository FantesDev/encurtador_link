@extends('site.layouts.basic')
@section('conteudo')

@component('site.layouts._components.menu')
@endcomponent

<div class="d-flex justify-content-center align-items-center m-3 vh-100 ">
<form class="bg-primary-subtle w-50 ">
  <div class="mb-3 ">
    <label for="Email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="email">
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Password</label>
    <input type="password" class="form-control" id="senha">
  </div>
  <div class="mb-3">
    <label for="msg" class="form-label">Mensagem</label>
    <input type="text" class="form-control" id="msg">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="reclamação">
    <label class="form-check-label" for="reclamação">Reclamação</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="sugestão">
    <label class="form-check-label" for="sugestão">Sugestão</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="suporte">
    <label class="form-check-label" for="suporte">Suporte</label>
  </div>
  <button type="submit" class="btn btn-primary">
    <a href="{{ route('list') }}" class="text-white text-decoration-none">Enviar</a>
  </button>
</form>
</div>
@endsection