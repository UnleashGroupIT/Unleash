@extends('admin.main')
       
@section('title', 'Sponsors')


@section('customcss')
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/bootstrap.min.css', 'admin/') }}" rel="stylesheet" type="text/css">
  
 
  <link href="{{ mix('css/style.css', 'admin/') }}" rel="stylesheet" type="text/css">
  <link href="{{ mix('css/sponsors.css', 'admin/') }}" rel="stylesheet" type="text/css">

  <style>
.modal-open {
  overflow: hidden; }

.modal {
  display: none;
  overflow: hidden;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  -webkit-overflow-scrolling: touch;
  outline: 0; }
  .modal.fade .modal-dialog {
    transform: translate(0, -25%);
    transition: transform 0.3s ease-out; }
  .modal.in .modal-dialog {
    transform: translate(0, 0); }

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto; 
background-color: rgba(0, 0, 0, 0.82);

}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px; }

.modal-content {
  position: relative;
  background-color: #fff;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  background-clip: padding-box;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 0;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0); }
  .modal-backdrop.in {
    opacity: 0;
    filter: alpha(opacity=0); }

.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5; }
  .modal-header:before, .modal-header:after {
    content: " ";
    display: table; }
  .modal-header:after {
    clear: both; }

.modal-header .close {
  margin-top: -2px; }

.modal-title {
  margin: 0;
  line-height: 1.428571429; }

.modal-body {
  position: relative;
  padding: 15px; }

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5; }
  .modal-footer:before, .modal-footer:after {
    content: " ";
    display: table; }
  .modal-footer:after {
    clear: both; }
  .modal-footer .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0; }
  .modal-footer .btn-group .btn + .btn {
    margin-left: -1px; }
  .modal-footer .btn-block + .btn-block {
    margin-left: 0; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto; }
  .modal-content {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5); }
  .modal-sm {
    width: 300px; } }

@media (min-width: 992px) {
  .modal-lg {
    width: 900px; } }


  #color_modal .modal-header {
    border-radius: 6px 6px 0 0;
}

.input-group {
    width: 100%;
}

button {
    margin-top: 10px;
}

.modal-content {
    border: none;
}

.position_modal .modal-dialog {
    position: fixed;
}
#top_modal .modal-dialog {
    top: 0;
    margin: 0 0 0 50%;
    transform: translateX(-50%);
}

#center_modal .modal-dialog {
    top: 50%;
    margin: 0 0 0 50%;
    transform: translate(-50%, -50%);
}

#bottom_modal .modal-dialog {
    bottom: 0;
    margin: 0 0 0 50%;
    transform: translateX(-50%);
}

@media screen and (max-width:768px) {
    #top_modal .modal-dialog,
    #center_modal .modal-dialog,
    #bottom_modal .modal-dialog {
        width: 100%;
    }
}

#sidebar_modal .modal-dialog {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    left: auto;
    margin: 0;
    width: 270px;
}

#sidebar_modal .modal-content {
    height: 100%;
    padding-top: 40%;
}

#grid_modal .row {
    border: 1px solid #dcdcdc;
    padding: 3px;
    margin-top: 2px;
}

#grid_modal .modal-body {
    padding: 25px;
}

.panel-title > a {
    display: block;
}

#fill_modal .modal-backdrop {
    opacity: 1;
}
</style>
@endsection
  
@section('content')

<div id="PageContainer">
 <section id="GridSection">
 <grid-controller v-bind:gridtype="GridType" @griddisplay="showGrid($event)"></grid-controller>


 </section>

 <section id="SpeakerGridSection">
    <div class="SectionHeader">
      <h2>@{{ selectedName }}</h2>

    </div>
    
  {{-- This is the selected grid's template  --}}  

    <div class="GridContainer">
        <ul class="SpeakersGrid" id="CustomSpeakerGrid" v-sortable="sortableOptions">
             <li v-for="speaker in speakers" :id=speaker.id :data-speakerid=speaker.id class="sortable">
                            <div class="GridImageContainer">
                              <div class="IconContainer">
                               <div title="Remove from selected grid" class="RemoveFromGrid" v-on:click="removeFromGrid(speaker.id)"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                              </div>
                                <div class="GridOverlay">
                                    <h2 class="SliphoverHeadline">@{{ speaker.company_name }}</h2>

                                </div>
                                <img class="Square GridItem" :alt="speaker.full_name" :src="'/storage/sponsors/colored/'+speaker.logo_url">
                            </div>
            </li>
          </ul>
      </div> 
 </section>

  <section id="AllSpeakerSection">
    <div class="SectionHeader">
        <h2>All Sponsors</h2>
    </div>

    <!-- form-modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#form_modal">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> New Sponsor
    </button>

    <div class="SearchContainer">
       <input type="text" placeholder="Search" name="SearchSpeakers" id="SearchSpeakers" v-model="speakerSearch" @keyUp="filterSpeakers()">

    </div>
   
    <div class="GridContainer">
        

     {{-- TODO: css style
          TODO: Módosítani a speaker grid templatet / újat létrehozni az all speakeresnek:
                    - Az all speakeres részre gomb kellene hogy hozzá lehessen adni a gridhez
                    - Vue functiont kellene a gombra bindolni és úgy kiiratni a forach-chel 
                    - Az edit speaker is kell
                    - Quick edit a custom értékekhez? 
                    - Delete from grid a sima grid sectionhoz -OK
                    - Reorder - OK
                    --}}


    <speakers-all ref="allSpeakerGrid" @speakeradded="addToGrid($event)"></speakers-all>
        
   </div>
 </section>



                            <div id="form_modal" class="modal fade animated" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add New Speaker</h4>
                                        </div>
                                            
                                            <form id="NewSpeakerForm" role="form" v-on:submit.prevent="formSubmit">
                                            <div class="modal-body">

                                                <label class="sr-only" for="first_name">First Name</label>
                                                <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control m-t-10">

                                                <label class="sr-only" for="last_name">Last Name</label>
                                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="form-control m-t-10">


                                                <label class="sr-only" for="job_title">Job Title</label>
                                                <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control m-t-10">

                                                <textarea name="bio" id="bio" placeholder="Short Bio"></textarea>

                                                <label class="sr-only" for="company">Company</label>
                                                <input type="text" name="company" id="company" placeholder="Company Name" class="form-control m-t-10"> 

                                                <label class="sr-only" for="website">Website</label>
                                                <input type="text" name="website" id="website" placeholder="Website URL" class="form-control m-t-10"> 

                                                <label class="sr-only" for="facebook">Facebook</label>
                                                <input type="text" name="facebook" id="facebook" placeholder="Facebook URL" class="form-control m-t-10">


                                                <label class="sr-only" for="twitter">Twitter</label>
                                                <input type="text" name="twitter" id="twitter" placeholder="Twitter URL" class="form-control m-t-10">

                                                <label class="sr-only" for="linkedin">Linkedin</label>
                                                <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin URL" class="form-control m-t-10">

                                                <div class="imgUploadContainer">
                                               <input type="file" name="speaker_img" id="speaker_img" class="imgInput" @change="changeImage" accept="image/*">
                                                <p id="ImgAreaPlaceholder">@{{imgTempText}}</p>
                                                <img id="speakerPrevImg" :src="imgPrev"/>
                                               </div>                                                                                                 

                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-succes">Submit</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- form-modal end -->

</div>

<style>
.imgInput{
    opacity: 0;
    width: 95%;
    padding: 3vw;
    position: absolute;
    margin: -2vw;
  }
 .imgUploadContainer{
      border: 1px solid black;
      padding: 2vw;

 }
 #speakerPrevImg{
  width:200px;
 } 


</style>
@endsection


@section('customscripts')
  <script src="{{ mix('js/app.js', 'admin/') }}" type="text/javascript"></script>
  <script src="{{ mix('js/sponsors.js', 'admin/') }}" type="text/javascript"></script>
@endsection

