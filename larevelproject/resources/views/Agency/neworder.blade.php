@extends('Agency.header')

@section('content')

<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Suggestion</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
<table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Labels</th>
              <th>Markup</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="label">Default</span></td>
              <td><code>&lt;span class="label"&gt;Default&lt;/span&gt;</code></td>
            </tr>
            <tr>
              <td><span class="label label-success">Success</span></td>
              <td><code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code></td>
            </tr>
            <tr>
              <td><span class="label label-warning">Warning</span></td>
              <td><code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code></td>
            </tr>
            <tr>
              <td><span class="label label-important">Important</span></td>
              <td><code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code></td>
            </tr>
            <tr>
              <td><span class="label label-info">Info</span></td>
              <td><code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code></td>
            </tr>
            <tr>
              <td><span class="label label-inverse">Inverse</span></td>
              <td><code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code></td>
            </tr>
          </tbody>
        </table>
<!-- Footer
    ================================================== -->
@endsection
