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


<h3>Online Submission of Abstracts
<ul class=" list-unstyled float-right guidline">
    
      <li class=""> <a href="#" class="" data-toggle="modal" data-target="#msg1">The Process of Submission. </a></li>
    
    
  <li class=""> <a href="{{ asset('storage/files/Guidelines for Abstracts Submission.pdf') }}"  target="_blank">
    Abstract Submission Guidelines </a></li>

    <li > <a href="{{ asset('storage/files/Guidelines for Poster Presentations - 2020.pdf') }}"  target="_blank">
      Guideline  for  E- poster </a></li>


  </ul>
</h3>

<form action="{{ route('save.abstract') }}" method="post" class="p-2"  enctype="multipart/form-data" >
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



  <div class="row">
  <div class="form-group">
    <label for="title">Title of Abstract</label>
    <input type="text" class="form-control" placeholder="Title" name="title" required  >
  </div>
</div>

  <div class="row">
  <div class="form-group">
    <label for="title">Type of Submission</label>
    <select class="form-control" name="typeofsubmit" required >
    <option value="">Please Select a Type of Submit</option>
    <option value="E-poster">E-poster</option>
    <option value="Oral Presentation Only">Oral Presentation Only</option>
   

  </select>

  </div>
</div>


  <div class="row">
  <div class="form-group">
    <label for="title">Theme</label>
    <select class="form-control" name="theme" required >
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
</div>
<div class="row divide">

  <div class="col-md-6">
    <div class="form-group ">
     <label for="abstract">Full Abstract</label>
     <input type="file" class="form-control-file" name="fullabstract" accept=".doc, .docx"  >
   </div>
</div>

<div class="col-md-6">
 <div class="form-group">
  <label for="abstract"> Abstract <span style="color:red;">without author details</span> for review</label>
  <input type="file" class="form-control-file" name="abstractnoauthor" accept=".doc, .docx"    >
</div>
</div>
</div>

<div class="row divide">

  <div class="col-md-6">
    <div class="form-group ">
     <label for="E-Poster">E-Poster</label>
     <input type="file" class="form-control-file" name="eposter" accept=".doc, .docx"  >
   </div>
</div>
</div>

<div class="row">
<div class="form-group">
  <label for="author">Corresponding Author</label>
  <input type="text" class="form-control" placeholder="Author Name" name="author" required  >
</div>
</div>




<div class="row">
<div class="form-group">
  <label for="tel">Telephone Number</label>
  <input type="text" class="form-control" placeholder="Phone Number" name="tp" required  >
</div>
</div>

<div class="row">
<div class="form-group">
  <label for="title">Email</label>
  <input type="email" class="form-control" placeholder="Email" name="email" required  >
</div>
</div>

<button type="submit" class="btn btn-primary" name="submit">Submit </button>
<div class="row">

</div>
</form>


<div class="row">
<div class="col-md-12">
@if(count($data) > 0)
<table class="table table-bordered" >
<tr>

<th>Type of Submit</th>
<th>Theme</th>
<th>Full Abstract</th>
<th>Abstract Without Author</th>
<th>E-Poster</th>

<th>Delete</th>
</tr>

@foreach($data as $row)
<tr>
<td>{{ $row->typeofsubmit }}</td>
<td>{{ $row->theme }}</td>
<td><a href="upload/{{ $row->fullabstract }}">View Doc</a></td>
<td><a href="upload/{{ $row->abstractnoauthor }}">View Doc</a></td>
<td><a href="upload/{{ $row->eposter }}">View Doc</a></td>
 <td>
 <form action="absdelete" method="POST">
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
</div>
  <!-- Modal -->
  <div class="modal fade" id="msg1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
     
        <div class="modal-body">
            <h2>Online Submission of Abstracts</h2>
            <hr />
           <ol>
                <li>Add the title of the abstract on the 1st box of the portal</li>
                <li>Select the type of submission either Oral Presentation or E-poster. </li>
                <li>Choose the relevant topic/ category that your abstract falls into</li>
                
                <li>Upload the full abstract in the 1st upload box named "Full Abstract"</li>
                <li>Upload a version of the abstract without the names and affiliations of the authors in the box named Abstract "without author details for review”, this is the copy sent to the abstract review committee</li>
                
                <li>Add the details of the corresponding author</li>
                
                <li>Submit</li>
                </ol>

                <h2>Online Submission of E-poster</h2>

                The Process of submission.

                <ol>
                <li>add the title of the abstract on the 1st box of the portal</li>
                <li>Choose the relevant topic/ category that your abstract falls into</li>
                <li>Upload the E -poster in the 1st upload box named "E- poster"</li>
                <li>Add the details of the corresponding author</li>
                <li>Submit</li>
                </ol>
            <hr />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  <!-- Modal1 -->
</div>
@endsection