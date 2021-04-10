@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cadastro de Usuarios</h1>
@stop

@section('content')
    <div class="shadow p-3 mb-5 bg-white rounded">
        
        <form>
            <div class="row">
                <div class="form-group col-9 col-md-6">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo">
                </div>
                <div class="form-group col-3 col-md-6">
                    <label for="exampleFormControlSelect1">Idade</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Estado civil</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex:Casado">
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex:123@123.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-block bg-gradient-primary">Cadastrar</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-block bg-gradient-danger">Voltar</button>
                </div>
            </div>
        </form>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
