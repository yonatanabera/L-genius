{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
 

    <div class="editManagersInfo  radius shadow p-5 ">
     <h3 class="mb-5">Manager's Information</h3>
     <form action="" >
         <div class="row">
             <div class="form-group col-lg-5">
                 <label for="managerImage" style="display: block;">Manager's Image</label>
                 <input id="managerImage" class="" type="file" name="">
             </div>
             <div class="form-group col-lg-5 offset-lg-1">
                 <label for="phoneNumber">Phone Number</label>
                 <input id="phoneNumber" placeholder="Phone Number" class="form-control" type="text" name="">
             </div>
             <div class="form-group col-lg-5">
                 <label for="Email">Email Address</label>
                 <input id="Email" class="form-control" placeholder="Email" type="email" name="">
             </div>
             <div class="form-group col-lg-5 offset-lg-1">
                 <label for="Adress">Address</label>
                 <input id="Adress" class="form-control" placeholder="Address" type="text" name="">
             </div>
             <div class="form-group col-lg-5 ">
                 <label for="position">Position in the Company</label>
                 <input id="position" class="form-control" placeholder="Position" type="text" name="">
             </div>
             <div class="form-group col-lg-5 offset-lg-1">
                 <label for="anotherInfo">Another Contact Information (if needed)</label>
                 <input id="anotherInfo" class="form-control" placeholder="Another Contact Information" type="text" name="">
             </div>
         </div>
       
      <div class="md-form my-5">
          <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> About the Manger</label>
           <textarea id="testimonyArticle" class="md-textarea form-control" rows="5"></textarea>

       </div>
     </form>
    </div>
   
</div>
@endsection