@extends('layouts.master')

@section('content')
<div class="row">
 
      <div class="large-9 columns">
        <div class="section-container tabs" data-section>
          <section class="section">
            <h5 class="title"><a href="#panel1">Hola</a></h5>
            <div class="content" data-slug="panel1">
              <form method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="large-12 columns">
                    <label>Correo
                      <input type="text" name="email" value="{{ $email }}" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Idioma
                      <select name="language">
                        <option value="en" @if( $language == 'en' ) selected @endif >English</option>
                        <option value="fr" @if( $language == 'fr' ) selected @endif>Français</option>
                        <option value="es" @if( $language == 'es' ) selected @endif>Español</option>
                      </select>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-6 columns">
                    <label>¿Desea recibir noticias?</label>
                    <input type="checkbox" name="news" value="yes" @if( $news ) checked @endif><label for="checkbox1">Si</label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <input type="submit" class="button small success radius" />
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
</div>
@stop