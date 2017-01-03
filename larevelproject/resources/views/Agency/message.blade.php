@extends('Agency.header')

@section('content')
<div class="container">
  <div class="row-fluid">
    <div class="span12">
      <div class="page-header">
        <div class="row-fluid">
          <div class="span12">
            <h1> Contact</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid contact">
    <div class="span4">
      <ul class="bordered-list">
        <li class="img-location">123 - savar, Dhaka-1201</li>
        <li class="img-phone"><b>Phone:</b> 01724131216</li>
        <li class="img-skype last"><b>Skype:</b> Raiment</li>
      </ul>
    </div>
    <div class="span6">
      <div class="wpcf7" id="wpcf7-f75-t1-o1">
        {!!Form::open(array('route'=>'message.store', 'class'=>'wpcf7-form','id'=>'cform'))!!}
          <div class="btn-group">
                   <select name="cat">
                            <option value="Suggestion">Suggestion</option>
                            <option value="Complain">Complain</option>
                    </select>
                    <label for="subject"><font color="white">Subject</font></label>
              <input type="text" name="subject" id="subject" value="" size="40" />
            </div>
            
          <div id="output" class="alert"> </div>
          <label for="message"><font color="white">Message</font></label>
          <textarea name="message" id="message" cols="40" rows="10"></textarea>
          <input type="submit" id="send-message" value="Send" class="btn btn-success" />
        {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>
 @endsection