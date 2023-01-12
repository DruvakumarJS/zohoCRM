@extends('layout.app')

@section('content')


<div class="form">

    <h1 id="title">Welcome</h1>
    <p id="description">Please fill the form</p>
    

     @if(session()->has('success'))
                <div class="alert alert-success">
                	<span style="color: red;">{{ session()->get('success') }}</span>
                   
                </div>
             @endif
  
    <form method="POST" action="{{route('save_form')}}" >
    	@csrf

 
      <label> Name <input class="write-area" name="name" placeholder="Enter your name" required> </label>

      <label> Company Name <input class="write-area" name="company_name" placeholder="Enter Company Name"required> 
      </label>

      <label> Address
      	 <input class="write-area" name="address"   min="8" placeholder="Enter Company Name" required> 
      </label>


      <label> Email <input class="write-area" name="email" type="email" placeholder="Enter your email" required> 
      </label>

      <label> Contact No. <input class="write-area" name="contact" type="number" placeholder="Enter your Contact Number" min="10" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;"  required> 
      </label>

      <label> Product Name <input class="write-area" name="product"  placeholder="Enter Product Name" required> 
      </label>

      <label> Quantity <input class="write-area" name="quantity" placeholder="Enter Quantity" required> 
      </label>
      
     <!--  <label for="dropdown"> Witch option best describes your current role
        <select class="write-area" id="dropdown" name="dropdown">
          <option value="">(Select Current Role)</option>
          <option value="1">Student</option>
          <option value="2">Full Time Job</option>
          <option value="3">Full Time Learner</option>
          <option value="4">Prefer not to say</option>
          <option value="5">Other</option>
        </select>
      </label>

      <label>Would you recommend freeCodeCamp to a friend?
        <label> <input type="radio" name="recommend" value="1"/> Definitely </label>
        <label> <input type="radio" name="recommend" value="2"/> Maybe </label>
        <label> <input type="radio" name="recommend" value="3"/> Not sure </label>
      </label>
      
      <label>What would you like to see improved? <span>(Check all that apply)</span>
        <label> <input type="checkbox" value="1"> Front-end Projects </label>
        <label> <input type="checkbox" value="2"> Back-end Projects </label>
        <label> <input type="checkbox" value="3"> Data Visualization </label>
        <label> <input type="checkbox" value="4"> Additional Courses </label>
      </label>

      <label>Any comments or suggestions?
        <textarea id="textarea" class="write-area" rows="5" placeholder="Enter your comment here..."></textarea>
      </label> -->

      <input type="submit" id="submit" >

    </form>
  </div>

  <style type="text/css">
  	
  </style>




@endsection