@extends('adminlte::page')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h5 class="card-title">My Profile</h5>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
      <span class="badge badge-primary"></span>
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
   <div class="col-exlg-2">
   <img src="{{ asset('fotoaku.png') }}" alt="Profile" style="max-width: 150px;">
    <p class="text-left">{{"Nama: Wardana"}}</p>
    <p class="text-left">{{ "NIM: $user->sso" }}</p>
    <p class="text-left">{{"Email: $user->email"  }}</p>
    <p class="text-left">{{"Phone: 087726044329"  }}</p>
   </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    </div>
        <x-adminlte-button theme="warning" class="btn btn-sm" icon="fa fa-edit" wire:click="edit" label="Edit" style="max-width: 300px;"/>
    </div>
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->
@endsection
