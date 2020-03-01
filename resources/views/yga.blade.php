@extends('layouts.admin')

@section('content')
<div class="container mainDiv ">

<div class="row">
<div class="col-md-12">
@if(session()->has('successMsg'))
  <div class="alert alert-success">  {{ session()->get('successMsg') }}</div>
@endif

@if(session()->has('deleteMsg'))
  <div class="alert alert-danger">  {{ session()->get('deleteMsg') }}</div>
@endif
</div>
</div>
    <div class="row">
        <div class="col-md-8">
        
            <h4>SIR SABARATHNAM ARULKUMARAN YOUNG GYNAECOLOGIST AWARD 2020
            <span style="color:red; font-weight:bold;" >
            [SLCOG Members Only]</span> <h4>
</span>           
            </div>
            
              <div class="col-md-4">
            <ul class=" list-unstyled float-right guidline">

  <li class=""> <a href="#" class="" data-toggle="modal" data-target="#msg1">The Process of Submission. </a></li>
    
  <li class=""> <a href="{{ asset('storage/files/Sir Sabaratnam Arulkumaran - Young Gynaecologist Awards 2020 Guide Line.pdf') }}" target="_blank">
    YGA Guidelines </a></li>
  </ul>
            </div>



</div>

<form action="{{ route('save.yga') }}" method="post" class="p-2"  enctype="multipart/form-data" >
{{ csrf_field() }}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div style="border:1px solid #666; width:80%;padding:5px;margin-top:20px;">
    <h3 class="p-2 ">Application Form</h3>
   <div class="row form-group">
      <label class="col-md-4">Full Name </label>
      <input  type="text" class=" col-md-4 form-control" placeholder="Full Name" name="fname" required >
  </div>

  <div class="row form-group ">
    <label class="col-md-4">Date of birth </label>
    <input  type="date"  min="1974-08-09" max="2005-08-09"
     class=" col-md-4 form-control" placeholder="Date of birth" name="dob" required >
     <em style="font-size:11px;padding:10px;color:red;"> * Age should be below 45years</em>


</div>

<div class="row form-group ">
  <label class="col-md-4">Qualifications  </label>
  <input  type="text" class=" col-md-4 form-control" placeholder="Qualifications  " name="qualifications" required >
</div>

<div class="row form-group ">
  <label class="col-md-4">Present working station</label>
  <input  type="text" class="col-md-4 form-control" placeholder="Present working station" name="workplace" required >
</div>

<div class="row form-group ">
  <label class="col-md-4">Previous stations  </label>
<textarea name="preworkplace" rows="4" cols="10" class="col-md-4 " placeholder="Previous Stations"></textarea>
</div>


<div class="row form-group ">
  <label class="col-md-4">SLCOG Membership number  </label>
  <input  type="text" class="col-md-4 form-control" placeholder="SLCOG Membership number" name="mnumber" required >
</div>

<div class="row form-group ">
  <label class="col-md-4">Phone number  </label>
  <input  type="text" class=" col-md-4 form-control" placeholder="Phone number" name="phone" required >
</div>

<div class="row form-group ">
  <label class="col-md-4">Email </label>
  <input  type="email" class="col-md-4 form-control" placeholder="Email " name="email" required >
</div>
</div>



<div style="border:1px solid #666; width:80%;padding:5px;margin-top:20px;">
  <div class="row form-group">
      <label class="col-md-4">Title  </label>
      <input  type="text" class=" col-md-4 form-control" placeholder="Title" name="title" required >
  </div>

    <div class="row form-group">
      <label class="col-md-4">Theme  </label>

        <select class=" col-md-4  form-control" name="theme" required>
          <option value="">Please Select a Theme</option>
        <option value="Maternal morbidity and Mortality">Maternal morbidity and Mortality</option>
        <option value="Benign Gynaecology">Benign Gynaecology</option>
        <option value="Health Economics">Health Economics</option>
        <option value="Feto-Maternal medicine">Feto-Maternal medicine</option>
        <option value="Gynaecological Oncology">Gynaecological Oncology</option>
        <option value="Education &  Training"> Education &  Training</option>
        <option value="Antenatal care , Labour, Post-partum care">Antenatal care , Labour, Post-partum care</option>
        <option value="Post Reproductive Health">Post Reproductive Health</option>
        <option value="Uro-gynaecology and pelvic floor">Uro-gynaecology and pelvic floor</option>
        <option value="SDG’s & Women’s health">SDG’s & Women’s health</option>
        <option value="Reproductive medicine">Reproductive medicine</option>
        <option value="Risk management and clinical governance">Risk management and clinical governance</option>

      </select>


  </div>

  <div class="row form-group ">
    <label class="col-md-4">Full text of the presentation with abstract [.doc, .docx, .pdf]</label>
    <input type="file" class="" name="pptfile" accept=".doc, .docx, .pdf"  required >
</div>

<div class="row form-group ">
  <label class="col-md-4">Curriculum vitae [.doc, .docx, .pdf] </label>
  <input type="file" class="" name="cv" accept=".doc, .docx, .pdf"  required >
</div>

</div>


<div class="row p-4">
    <div class="col-md-10">
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</div>
</form>
<hr />
<div class="row">
@if(count($data) > 0)
<table class="table table-bordered">
<tr>
<th>Name</th>
<th>SLCOG Membership Number</th>
<th>Theme</th>
<th>Email</th>
<th>Abstract</th>
<th>CV</th>
<th>Delete</th>
</tr>

@foreach($data as $row)
<tr>
<td>{{ $row->fname }}</td>
<td>{{ $row->mnumber }}</td>
<td>{{ $row->theme }}</td>
<td>{{ $row->email }}</td>
<td><a href="upload/{{ $row->pptfile }}">View Abstract</a></td>
<td><a href="upload/{{ $row->cv }}">View Cv</a></td>
 <td>
 <form action="ygadelete" method="POST">
 @csrf
 <input type="hidden" name="id" value="{{ $row->id }}" />
 <button type="submit" class="btn btn-danger">Delete</button>
 </td>
</form>
</tr>

@endforeach

</table>
@endif
</div>

  <!-- Modal -->
  <div class="modal fade" id="msg1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
     
        <div class="modal-body">
            <h2>YGA Submission 2020</h2>
            <hr />
          <ol>
  <li>Fill the application form.</li>
  <li>Add the title of the presentation on the 1<sup>st</sup> box of the portal</li>
  <li>Choose the relevant topic/ category that your presentation falls into</li>
  <li>Upload the Full text of the presentation with abstract in the 1<sup>st</sup> upload box named "Full text" (.pdf or .doc or .docx)</li>
  <li>Upload the detailed curriculum vitae in the 2<sup>nd</sup> upload box named " curriculum vitae " in word format (.pdf or .doc or .docx)</li>
  <li>Submit</li>
</ol>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  <!-- Modal1 -->
</div>
@endsection