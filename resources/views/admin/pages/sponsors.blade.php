@extends('admin.main')
       
@section('title', 'Sponsors')


@section('customcss')
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/bootstrap.min.css', '/admin') }}" rel="stylesheet" type="text/css">
  
 
    <link href="{{ mix('css/style.css', '/admin') }}" rel="stylesheet">
  <link href="{{ mix('css/sponsors.css', '/admin') }}" rel="stylesheet" type="text/css">
  <link href="{{ mix('css/common.css', '/admin') }}" rel="stylesheet" type="text/css">

@endsection
  
@section('content')

<div id="PageContainer">
 <section id="GridSection">
  <h2>Grid Selector</h2>
  <div id="GridInnerContainer">

      <h3 id="NewGridHeadline"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create New Sponsor Grid</h3> 

    <grid-controller v-bind:gridtype="GridType" @griddisplay="showGrid($event)"></grid-controller>

  <div>
 </section>

 <section>
    <div class="SectionHeader">
      <h2>@{{ selectedName }}</h2>

    </div>

  {{-- This is the selected grid's template  --}}  

<div class="infinite-loading-container" id="CustomItemLoading" _v-34d8cf3a=""> <div _v-34d8cf3a="" style=""> <i _v-34d8cf3a="" class="loading-default"></i> </div> <div class="infinite-status-prompt" _v-34d8cf3a="" style="display: none;"> No results :( </div> <div class="infinite-status-prompt" _v-34d8cf3a="" style="display: none;"> No more data :) </div> </div>

    <div class="GridContainer CustomItemContainer">
        <ul class="SponsorsGrid" id="CustomSponsorGrid" v-sortable="sortableOptions">
             <li v-for="sponsor in sponsors" :id=sponsor.id :data-sponsorid=sponsor.id class="sortable">
              @{{ sponsor }}
                            <div class="GridImageContainer">
                              <div class="IconContainer">
                               <div title="Remove from selected grid" class="RemoveFromGrid" v-on:click="removeFromGrid(sponsor.id)"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                                <div title="Edit Sponsor across all events" class="EditSponsorGlobal" v-on:click="editFilteredSponsor(sponsor.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div>
                              </div>
                                <div class="GridOverlay">
                                    <h2 class="SliphoverHeadline">@{{ sponsor.company_name }}</h2>
                                   <h3 class="SmallParagraph">@{{ sponsor.website }}</h3>
                                    
                                </div>
                                <img class="Square GridItem" :alt="sponsor.company_name" :src="'/storage/sponsors/colored/'+sponsor.logo_url">
                            </div>              
            </li>

          </ul>

      </div> 
 </section>

  <section id="AllSponsorSection">
    <div class="SectionHeader">
        <h2>All Sponsors</h2>
    </div>

    <!-- form-modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#form_modal">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> New Sponsor
    </button>

    <div class="SearchContainer">
       <input type="text" placeholder="Search" name="SearchSponsors" id="SearchSponsors" v-model="sponsorSearch" @keyUp="filterSponsors()">

    </div>
   
    <div class="GridContainer">
        

    <sponsors-all ref="allSponsorGrid" @sponsoradded="addToGrid($event)" @editsponsordata="sponsorEditRequest($event)"></sponsors-all>
      
<div class="infinite-loading-container" _v-34d8cf3a=""> <div _v-34d8cf3a="" style=""> <i _v-34d8cf3a="" class="loading-default"></i> </div> <div class="infinite-status-prompt" _v-34d8cf3a="" style="display: none;"> No results :( </div> <div class="infinite-status-prompt" _v-34d8cf3a="" style="display: none;"> No more data :) </div> </div>

   </div> 
 </section>


                            <div id="form_modal" class="modal fade animated" data-backdrop="static" data-keyboard="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add New Sponsor</h4>
                                        </div>
                                            
                                            <form id="NewSponsorForm" role="form" v-on:submit.prevent="newSponsorSubmit">
                                            <div class="modal-body">

                                                <label class="sr-only" for="suffix">Suffix</label>
                                                <input type="text" name="suffix" id="prefix" placeholder="Suffix" class="form-control m-t-10">                                              

                                                <label class="sr-only" for="first_name">First Name</label>
                                                <input type="text" required name="first_name" id="first_name" placeholder="First Name" class="form-control m-t-10">

                                                <label class="sr-only" for="last_name">Last Name</label>
                                                <input type="text" required name="last_name" id="last_name" placeholder="Last Name" class="form-control m-t-10">


                                                <label class="sr-only" for="job_title">Job Title</label>
                                                <input type="text" name="job_title" id="job_title" placeholder="Job Title" class="form-control m-t-10">

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

                                                <br />
                                                <textarea name="bio" id="bio" placeholder="Short Bio"></textarea>
                                                <br />

                                                <div class="imgUploadContainer">
                                               <input type="file" name="sponsor_img" id="sponsor_img" class="imgInput" @change="changeImage" accept="image/*">
                                                <p id="ImgAreaPlaceholder">@{{imgTempText}}</p>
                                                <img id="sponsorPrevImg" :src="imgPrev"/>
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



                            <div id="edit_form_modal" ref="editmodal" class="modal fade animated" data-backdrop="static" data-keyboard="true" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit global information</h4>
                                        </div>
                                            
                                            <form id="EditSponsorForm" role="form" v-on:submit.prevent="editSponsor">
                                            <div class="modal-body">

                                                <label class="sr-only" for="suffix">Suffix</label>
                                                <input type="text" name="suffix" :value="editSponsorData.prefix ? editSponsorData.prefix : ''" id="prefix" placeholder="Suffix" class="form-control m-t-10">

                                                <label class="sr-only" for="first_name">First Name</label>
                                                <input type="text" required name="first_name" :value="editSponsorData.first_name ? editSponsorData.first_name : ''" id="first_name" placeholder="First Name" class="form-control m-t-10">

                                                <label class="sr-only" for="last_name">Last Name</label>
                                                <input type="text" required name="last_name" id="last_name" :value="editSponsorData.last_name ? editSponsorData.last_name : ''" placeholder="Last Name" class="form-control m-t-10">


                                                <label class="sr-only" for="job_title">Job Title</label>
                                                <input type="text" name="job_title" id="job_title" :value="editSponsorData.job_title ? editSponsorData.job_title : ''" placeholder="Job Title" class="form-control m-t-10">

                                                <label class="sr-only" for="company">Company</label>
                                                <input type="text" name="company" id="company" :value="editSponsorData.company ? editSponsorData.company : ''" placeholder="Company Name" class="form-control m-t-10"> 


                                                <label class="sr-only" for="website">Website</label>
                                                <input type="text" name="website" id="website" :value="editSponsorData.website ? editSponsorData.website : ''" placeholder="Website URL" class="form-control m-t-10"> 

                                                <label class="sr-only" for="facebook">Facebook</label>
                                                <input type="text" name="facebook" id="facebook" :value="editSponsorData.facebook ? editSponsorData.facebook : ''" placeholder="Facebook URL" class="form-control m-t-10">


                                                <label class="sr-only" for="twitter">Twitter</label>
                                                <input type="text" name="twitter" id="twitter" :value="editSponsorData.twitter ? editSponsorData.twitter : ''" placeholder="Twitter URL" class="form-control m-t-10">

                                                <label class="sr-only" for="linkedin">Linkedin</label>
                                                <input type="text" name="linkedin" id="linkedin" :value="editSponsorData.linkedin ? editSponsorData.linkedin : ''" placeholder="Linkedin URL" class="form-control m-t-10">

                                                <br />

                                                <textarea name="bio" id="bio" placeholder="Short Bio" v-if="editSponsorData.bio">@{{editSponsorData.bio}}</textarea>

                                                <textarea name="bio" id="bio" placeholder="Short Bio" v-else></textarea>
                                                <br />                                                

                                                <div class="imgUploadContainer">
                                               <input type="file" name="sponsor_img" id="sponsor_img" class="imgInput" @change="changeImage" accept="image/*">
                                                <p id="EditImgAreaPlaceholder">@{{imgTempText}}</p>
                                                <img id="sponsorPrevImg" :src="imgPrev"/>
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
 #sponsorPrevImg{
  width:200px;
 } 


</style>


@endsection


@section('customscripts')
   <script src="{{ mix('js/app.js', '/admin') }}" type="text/javascript"></script>
  <script src="{{ mix('js/sponsors.js', '/admin') }}" type="text/javascript"></script>

<script>
jQuery( "#NewGridHeadline" ).click(function() {
  jQuery( "#NewGridContainer" ).slideToggle( "slow", function() {
    // Animation complete.
  });
});

</script>  
@endsection

