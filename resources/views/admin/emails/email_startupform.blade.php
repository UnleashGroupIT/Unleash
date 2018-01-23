 @extends ('admin.emails.email_template')

 @section ('content')


 		<!-- ORDER BLOCK -->
		 <table class="row"><tbody><tr>
            <th class="small-12 large-8 columns first"><table><tr><th>

					<h2>A submission has been received from:</h2>
            </th></tr></table></th>
          </tr></tbody></table>
		  
          <table class="row"><tbody><tr>
            <th class="small-12 large-8 columns first"><table><tr><th>
              <p><strong>Company: </strong>{{ $formdata->company }}</p>

			  
            </th></tr></table></th>
          </tr></tbody></table>
		  

          <table class="row"><tbody><tr>
            <th class="small-12 large-8 columns first"><table><tr><th>
              <br/><p><strong>Data url: <a href="{{ $formdata->zipname }}">{{ $formdata->zipname }}</a></strong></p>
            </th></tr></table></th>
          </tr></tbody></table>			  
		  
		<hr>
		<!-- END ORDER BLOCK -->

@endsection	
