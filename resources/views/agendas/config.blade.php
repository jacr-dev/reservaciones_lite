@extends('materialize.template')

@section('page-title', 'Agendas')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">
          Configurar Agenda
          <small>Detalles de la Agenda</small>
        <div class="pull-right">
        <ol class="breadcrumbs">
          <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
          <li><a href="{{ route('agendas.index') }}">@lang('app.agend')</a></li>
          <li class="active">@lang('app.config')</li>
        </ol>
        </div>
        </h5>
      </div>
    </div>
  </div>

<div class="divider"></div>

@include('partials.messages')


{{-- Incio de tab --}}
<div id="multi-color-tab" class="section">
   <div class="row">
     <div class="col s12 m8 l12">
       <div class="row">
         <div class="col s12">

           <ul class="tabs">
             <li class="tab col s6">
               <a href="#citas" aria-controls="citas" role="tab" data-toggle="tab"
                  class="white-text cyan darken-1 waves-effect waves-light active"  >
                   <i class="fa fa-lock"></i>
                   @lang('app.citas')
               </a>
             </li>
             <li class="tab col s6">
               <a href="#registration" aria-controls="registration" role="tab" data-toggle="tab"
                  class="white-text red darken-1 waves-effect waves-light" >
                   <i class="fa fa-user-plus"></i>
                   @lang('app.registration')
               </a>
             </li>
           </ul>

         </div>
         <!--PANES-->
         <div class="col s12">
           <div class="row">
             <div id="citas" class="col s12 m12 l12 gray lighten-3">
               <div class="col s12 m12 l6">
                   @include('agendas.partials.config.citas')
               </div>
               <div class="col s12 m12 l6">
                   @include('agendas.partials.config.throttling')
               </div>
               <div class="row">
                   <div class="col s12 m12 l12">

                   </div>
               </div>
             </div>
          </div>
          <div class="row">
             <div id="registration"  class="col s12 m12 l12   gray lighten-3">
               <div class="col s12 m12 l6">
                   @include('agendas.partials.config.registration')
               </div>
               <div class="col s12 m12 l6">

               </div>
             </div>
          </div>
         </div>
       </div>
     </div>
   </div>
</div>
@stop