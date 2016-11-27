<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Attendist')


@section('content')
  <div class="container-fluid">
<div class="row" id="class-nav">
  <div class="col-md-12">
    <label class="col-sm-4 col-xs-4 control-label">Add Class</label>
    <label class="col-sm-4 col-xs-4 control-label">Add Section</label>
    <label class="col-sm-4 col-xs-4 control-label">Add Instructor</label>
  </div>
</div>
<div class="row tile-dashboard">
  <div class="col-md-4 col-xs-12 klass-tile">
    <h2>
      TOEFL BEGINNER
    </h2>
    <p>
      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
    </p>
    <p class="klass-tile-detail">
      <a class="btn" href="#">2 Sections</a>
    </p>
  </div>
  <div class="col-md-4 col-xs-12 klass-tile">
    <h2>
      TOEFL INTERMEDIATE
    </h2>
    <p>
      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
    </p>
    <p class="klass-tile-detail">
      <a class="btn" href="#">3 Sections</a>
    </p>
  </div>
  <div class="col-md-4 col-xs-12 klass-tile">
    <h2>
      TOEFL ADVANCED
    </h2>
    <p>
      Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
    </p>
    <p class="klass-tile-detail">
      <a class="btn" href="#">1 Section</a>
    </p>
  </div>
</div>
</div>
@endsection
