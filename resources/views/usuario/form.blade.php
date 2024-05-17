
@extends('layouts.app',['pagina'=>'usuarios'])
<div class="box box-info padding-1">
    <div class="box-body row">        
        <div class="form-group col-md-4">
           <h1>1</h1>
        </div>
        <div class="form-group col-md-3">
        <h1>2</h1>
        </div>
        <div class="form-group col-md-5">
        <h1>3</h1>
        </div>
        
        

    </div>
    <div class="box-footer mt20 text-right">
        <a href="{{ url('usuarios.index') }}" class="btn btn-danger">{{ __('Cancel') }}</a>
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>