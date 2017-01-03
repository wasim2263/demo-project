@extends('header')
@section('content')
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Order</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              
              @if($a=session('manid'))
              
              {!!Form::open(array('route'=>'Men.store'))!!}
              <li class="span4">
                <div class="thumbnail">
                 <?php echo  '<img src=upload/Man/'.$a->man_image.'  />';?>
                   
                  <div class="caption">
                    <h3>{{$a->man_name}}</h3>
                    <p>Price:{{$a->manprice}}</p>                 
                </div>
              </div>
              </li>       
              <li class="span4">
                <div class="thumbnail">
                  <div class="caption">
                    <input type="hidden" name= "product_id"  value=<?php echo $a->man_id ;?>/>
                    <input type="hidden" name= "product_name"  value='<?php echo $a->man_name ;?>'/>
                    <input type="hidden" name= "price"  value=<?php echo $a->manprice ;?>/>
                    <input type="hidden" name= "type"  value='man'/>
                    <label >Color </label>
  
                    <input type="text" name= "color" maxlength="255" size="8" value=""/>
                    <label >Amount </label>
    
                    <input type="number" name="amount"  type="text" maxlength="255" value=""/> 
                    <label >Size </label>
                    <select name="size"> 
                      <option value="" selected="selected"></option>
                      <option value="small" >Small</option>
                      <option value="medium" >Medium</option>
                      <option value="large" >Large</option>

                    </select>
                <label >Delivery Date </label>
                <input type="date" name="date" value="" > 
    
                  </div>

                  <div class="widget-footer">
                    <p>
                      <input type="submit" name="login" class="btn btn-primary" value="Order now">
                      <a href="{{route('Men.edit',$a->man_id)}}" class="btn btn-primary">refresh</a>&nbsp;
                      
              
                    </p>
                  </div>
                </div>
              </li>
              {!!Form::close()!!}      
              @elseif($a=session('womanid'))
              {!!Form::open(array('route'=>'women.store'))!!}
              <li class="span4">
                <div class="thumbnail">
                  <?php echo  '<img src=upload/Woman/'.$a->woman_image.'  />';?>
                    <div class="caption">
                    <h3>{{$a->woman_name}}</h3>
                    <p>Price:{{$a->womanprice}}</p>
                  </div>
                  
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <div class="caption">
                    <input type="hidden" name= "product_id"  value=<?php echo $a->woman_id ;?>/>
                    <input type="hidden" name= "product_name"  value=<?php echo $a->woman_name ;?>/>
                    <input type="hidden" name= "price"  value=<?php echo $a->womanprice ;?>/>
                    <input type="hidden" name= "type"  value='woman'/>
                                      
                    <label >Color </label>
  
                    <input type="text" name= "color" maxlength="255" size="8" value=""/>
                    <label >Amount </label>
    
                    <input type="number" name="amount"  type="text" maxlength="255" value=""/> 
                    <label >Size </label>
                    <select name="size"> 
                      <option value="" selected="selected"></option>
                      <option value="small" >Small</option>
                      <option value="medium" >Medium</option>
                      <option value="large" >Large</option>

                    </select>
                <label >Delivery Date </label>
                <input type="date" name="date" value="" > 
    
                  </div>

                  <div class="widget-footer">
                    <p>
                     <input type="submit" name="login" class="btn btn-primary" value="Order now">
                      <a href="{{route('women.edit',$a->woman_id)}}" class="btn btn-primary">refresh</a>&nbsp;
                      </p>
                  </div>
                </div>
              </li>
              {!!Form::close()!!}

              
              @elseif($a=session('wedid'))
              {!!Form::open(array('route'=>'wedding.store'))!!}
              <li class="span4">
                <div class="thumbnail">
                    <?php echo  '<img src=upload/Wedding/'.$a->wed_image.'  />';?>
                   <div class="caption">
                    <h3>{{$a->wed_name}}</h3>
                    <p>Price:{{$a->wed_price}}</p>
                  </div>
                 </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <div class="caption">
                    <input type="hidden" name= "product_id"  value=<?php echo $a->wed_id ;?>/>
                    
                    <input type="hidden" name= "product_name"  value=<?php echo $a->wed_name ;?>/>
                    <input type="hidden" name= "price"  value=<?php echo $a->wed_price ;?>/>
                    <input type="hidden" name= "type"  value='wedding'/>
                    
                    <label >Color </label>
  
                    <input type="text" name= "color" maxlength="255" size="8" value=""/>
                    <label >Amount </label>
    
                    <input type="number" name="amount"  type="text" maxlength="255" value=""/> 
                    <label >Size </label>
                    <select name="size"> 
                      <option value="" selected="selected"></option>
                      <option value="small" >Small</option>
                      <option value="medium" >Medium</option>
                      <option value="large" >Large</option>

                    </select>
                <label >Delivery Date </label>
                <input type="date" name="date" value="" > 
    
                  </div>

                  <div class="widget-footer">
                    <p>
                      <input type="submit" name="login" class="btn btn-primary" value="Order now">
                      <a href="{{route('wedding.edit',$a->wed_id)}}" class="btn btn-primary">refresh</a>&nbsp;
                      </p>
                  </div>
                </div>
              </li> 
              {!!Form::close()!!}
              @elseif($a=session('kidsid'))
              {!!Form::open(array('route'=>'kids.store'))!!}
              
              <li class="span4">
                <div class="thumbnail">
                   <?php echo  '<img src=upload/Kids/'.$a->kids_image.'  />';?>
                      <div class="caption">
                    <h3>{{$a->kidspro_name}}</h3>
                    <p>Price:{{$a->kidsprice}}</p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <div class="caption">

                    <input type="hidden" name= "product_name"  value=<?php echo $a->kidspro_name ;?>/>
                    <input type="hidden" name= "product_id"  value=<?php echo $a->kidspro_id ;?>/>
                    <input type="hidden" name= "price"  value=<?php echo $a->kidsprice ;?>/>
                    <input type="hidden" name= "type"  value='kids'/>
                                        
                    <label >Color </label>
  
                    <input type="text" name= "color" maxlength="255" size="8" value=""/>
                    <label >Amount </label>
    
                    <input type="number" name="amount"  type="text" maxlength="255" value=""/> 
                    <label >Size </label>
                    <select name="size"> 
                      <option value="" selected="selected"></option>
                      <option value="small" >Small</option>
                      <option value="medium" >Medium</option>
                      <option value="large" >Large</option>

                    </select>
                <label >Delivery Date </label>
                <input type="date" name="date" value="" > 
    
                  </div>

                  <div class="widget-footer">
                    <p>
                      <input type="submit" name="login" class="btn btn-primary" value="Order now">
                      <a href="{{route('kids.edit',$a->kidspro_id)}}" class="btn btn-primary">refresh</a>&nbsp;
                      </p>
                  </div>
                </div>
              </li>
              {!!Form::close()!!}
              @elseif($a=session('status'))
                {{$a}}
              @else
              <h1>nothing to order</h1>
              @endif

              
            </ul>
            
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    @endsection