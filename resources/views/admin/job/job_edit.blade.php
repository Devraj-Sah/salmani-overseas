@extends('admin.layout.master')
@section('style')
    <style>
        .reqr{
            color: red;
        }
        .border_all{
            border: 1px solid #000 !important;
        }
        table{
            max-width: 99% !important;
            margin: 0 auto;
            padding: 0;
        }
    </style>

@endsection
@section('content')
<section class="content">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">New Navigation for {{$category}} Category</h3>  

        <div class="col-sm-12">
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>OOPS! You might have missed to fill some required fields. Please check the errors.  <strong>
        
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
        
            </div>
            @endif
        </div> 

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-default btn-sm backlink"><i class="fa fa-backward" aria-hidden="true"></i> Back </button>
        </div>

        </div>
        <!-- form start -->
        
        <form method="post" action="/admin/jobupdate{{$category}}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-md-9" style="padding-top: 10px;">
                <div class="form-group col-md-6">
                    <label for="nav_name">Name <i class="reqr">*</i> (For Admin and Slug) </label>
                    <input type="text" class="form-control {{ $errors->has('nav_name') ? 'has-error' : '' }}" id="nav_name" name="nav_name" placeholder="Navigation Name" value="{{$job->navigation->nav_name}}" required="required">

                    <input type="hidden" name="alias" class="form-control {{ $errors->has('alias') ? 'has-error' : '' }}" placeholder="Alias" id="alias" required="" value="{{$job->navigation->alias}}">
                </div>


                <div class="form-group col-md-6">
                    <label for="caption">Caption <i class="reqr">*</i> (Job Title)</label>
                    <input type="hidden" class="form-control" name="job_id" required="required" value="{{$job->id}}">
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="caption" placeholder="Caption" value="{{$job->navigation->caption ?? ''}}" required="required">
                </div>    
                
                  <div class="form-group col-md-6">
                    <label for="caption">Company Name <i class="reqr">*</i>(company name)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="company_name" placeholder="company name" value="{{$job->company_name}}" required="required">
                </div>   

                  <div class="form-group col-md-6">
                    <label for="caption">Country<i class="reqr">*</i> (country)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="country" placeholder="country" value="{{$job->country}}" required="required">
                </div>   

                  <div class="form-group col-md-6">
                    <label for="caption">salary <i class="reqr">*</i> (salary)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="salary" placeholder="salary" value="{{$job->salary}}" required="required">
                </div>   

                  <div class="form-group col-md-6"  style="display: none;">
                    <label for="caption">Contract Time <i class="reqr">*</i> (Contract Time)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="number" id="caption" name="contract_time" placeholder="2 years" value="{{$job->contract_time}}" >
                </div>   

                <div class="form-group col-md-6"  style="display: none;">
                    <label for="caption">deadline	  <i class="reqr">*</i>(deadline	 )</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="deadline" placeholder="deadline" value="{{$job->deadline	}}" >
                </div>   

                <div class="form-group col-md-6">
                    <label for="caption">Posted On <i class="reqr">*</i> (posted_on)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="posted_on" placeholder="Posted On" value="{{$job->posted_on}}" required="required">
                </div>

                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">Food & Accommodation <i class="reqr">*</i> (Food & Accommodation)</label> --}}
                    <label for="caption">Food & Accommodation  (Food & Accommodation)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="foodaccommondation" placeholder="foodaccommondation" value="{{$job->foodaccommondation}}" >
                </div>
                <div class="form-group col-md-6">
                    {{-- <label for="caption">Total Demand <i class="reqr">*</i> (total demand)</label> --}}
                    <label for="caption">Total Demand  (total demand)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="total_demand" placeholder="tital_demand" value="{{$job->total_demand}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">Working Day <i class="reqr">*</i> (Working Day)</label> --}}
                    <label for="caption">Working Day  (Working Day)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="working_day" placeholder="working_day" value="{{$job->working_day}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    <label for="caption">Working Hour   (Working Hour )</label>
                    {{-- <label for="caption">Working Hour  <i class="reqr">*</i> (Working Hour )</label> --}}
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="working_hour" placeholder="working_hour" value="{{$job->working_hour}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">Visa Ticket <i class="reqr">*</i> (Visa Ticket)</label> --}}
                    <label for="caption">Visa Ticket (Visa Ticket)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="visa_ticket" placeholder="visa_ticket" value="{{$job->visa_ticket}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">Service Charge<i class="reqr">*</i> (Service Charge)</label> --}}
                    <label for="caption">Service Charge (Service Charge)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="service_charge" placeholder="service_charge" value="{{$job->service_charge}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">LT Number <i class="reqr">*</i> (LT Number)</label> --}}
                    <label for="caption">LT Number (LT Number)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="lt_number" placeholder="lt_number" value="{{$job->lt_number}}" >
                </div>
                <div class="form-group col-md-6"  style="display: none;">
                    {{-- <label for="caption">Interview <i class="reqr">*</i> (Interview)</label> --}}
                    <label for="caption">Interview  (Interview)</label>
                    <input class="form-control {{ $errors->has('caption') ? 'has-error' : '' }}" type="text" id="caption" name="interview" placeholder="interview" value="{{$job->interview}}" >
                </div>

                <div id="url_link_div" class="form-group col-md-10" style="display: none;">
                    <label for="link_url">URL Link <i class="reqr">*</i></label>
                    <input class="form-control {{ $errors->has('link') ? 'has-error' : '' }}" type="text" id="link_url" name="link" placeholder="URL Link" value="{{$job->navigation->link}}">
                </div>

                <div class="clearfix"></div>

                <div id="short_content_div" class="form-group col-md-12">
                    <label for="short_content">Short Content</label>
                    <textarea class="form-control ckeditor" id="short_content"  name="short_content" rows="5" placeholder="Short Content" >{{$job->navigation->short_content}}</textarea>
                </div>           

                <div id="long_content_div" class="form-group col-md-12">
                    <label for="long_content">Main Content</label>
                    <textarea class="form-control ckeditor" id="long_content" name="long_content" rows="10" placeholder="Main Content" >{{$job->navigation->long_content}}</textarea>
                </div>              
            </div>

        <div class="col-md-3" style="padding-top: 10px;">

            <div class="form-group col-md-12">
                <button type="submit" id="nav_save" class="btn btn-block btn-primary full_width" title="Click to Save" action="#go_to_save">Update</button>
            </div>

            <div class="form-group col-md-12">
                <label for="is_active">Display Status <i class="reqr">*</i></label>
                <select class="form-control" id="is_active" name="page_status">
                     <option value="1" {{($job->navigation->page_status == 1)? 'selected' : ''}}>Active</option>
                    <option value="0" {{($job->navigation->page_status == 0)? 'selected' : ''}}>De-active</option>
                </select>
            </div>

            <div class="clearfix"></div>

            <?php $page_types= App\Models\PageType::get(); ?>
                
            <div class="form-group col-md-12">
                <label for="page_type">Page Type <i class="reqr">*</i></label>   
                <select class="form-control" name="page_type" id="page_type" required="" onchange="pageType()"> 
                    <option value="Job">Job</option>                              
                </select>
            </div>            
            
            <!--/.parent_id_div-->
                <div id="parent_id_div" class="form-group col-md-12">
                        <label for="parent_page_id">Parent Navigation <i class="reqr">*</i></label> 
                        <select class="form-control" name="parent_page_id" required>
                            <option value="0">----none-----</option>
                            @foreach($categories as $c)
                            <option value="{{$c->id}}" <?php echo ($c->id == $job->navigation->parent_page_id)?'selected':'';?>>
                                {{$c->nav_name}}
                            </option>
                           @endforeach           
                        </select>   
                </div>
            <!--/.end parent_id_div-->

            <!-- <div class="form-group col-md-12">-->
            <!--    <label for="page_template">Page Template <i class="reqr">*</i></label>   -->
            <!--    <select class="form-control" name="page_template" id="page_template" required=""> -->
            <!--        <option value="Normal">Normal</option>-->
            <!--        <option value="None">None</option>                                  -->
            <!--    </select>-->
            <!--</div>-->
                                                           

            <div class="form-group col-md-12">
                <label for="img_file">Icon Image </label> 
                    @if($job->navigation->icon_image)              
                    <img src="{{asset('uploads/icon_image/'.$job->navigation->icon_image)}}" alt="" height="150" width="100%">                    
                    <a href="/admin/navigation-edit/{{$category}}/deleteimage2" onclick="return confirm('Are you sure to delete')" style="color: red">Remove Icon Image</a>
                    @endif
                    <input  type="file" class="form-control"  id="img_file" name="icon_image">                    
            </div>
            <div class="form-group col-md-12">
                <label for="img_file">Featured Image </label> 
                    @if($job->navigation->featured_image)              
                    <img src="{{asset('uploads/featured_image/'.$job->navigation->featured_image)}}" alt="" height="150" width="100%">                    
                    <a href="/admin/navigation-edit/{{$category}}/deleteimage2" onclick="return confirm('Are you sure to delete')" style="color: red">Remove Featured Image</a>
                    @endif
                    <input  type="file" class="form-control"  id="img_file" name="featured_image">                    
            </div> 
            @if(($job->navigation->parent_page_id) == 26 || ($job->navigation->id) == 7))
            @else           
            <div class="form-group col-md-12">
                <label for="icon_image_caption">Extra Caption</label>
                    <input class="form-control" type="text" id="icon_image_caption" name="icon_image_caption" placeholder="Extra Caption" value="{{$job->navigation->icon_image_caption}}">
            </div>
            @endif

            <div class="form-group col-md-12">
                <label for="banner_file">Banner Image</label>
                    @if($job->navigation->banner_image)   
                    <img src="{{asset($job->navigation->banner_image)}}" alt="" height="150" width="100%">                    
                    <a href="{{route('deleteBannerImage',[$category_name,$category_id])}}" onclick="return confirm('Are you sure to delete')" style="color: red">Remove Banner Image</a>
                    @endif                
                    <input class="form-control" type="file" id="banner_file" name="banner_image">
            </div>

            @if($job->navigation->main_attachment)
                <div id="pre_attachment" class="form-group col-md-10">
                    <label for="main_attachment">Previous Main Document</label>
                    <div>{{$job->navigation->main_attachment}}</div>                    
                    <a href="/admin/navigation-edit/{{$category}}/deletemainattachment" onclick="return confirm('Are you sure to delete')" style="color: red">Remove Document</a>
                </div>

                <div id="main_attachment" class="form-group col-md-10">
                    <label for="main_attachment">Main Attachment</label>
                    <input type="file" class="form-control" id="main_attachment" name="main_attachment">
                </div>
            @else
                <div id="main_attachment" class="form-group col-md-10">
                    <label for="main_attachment">Main Attachment</label>
                    <input type="file" class="form-control" id="main_attachment" name="main_attachment">
                </div>
            @endif

            <div class="form-group col-md-12">
                <label for="page_title">Page Title</label>
                <input class="form-control" type="text" id="page_title" name="page_title" placeholder="Page Title" value="{{$job->navigation->page_title}}">
            </div>
            <div class="form-group col-md-12">
                <label for="page_keyword">Page Keywords</label>
                <input class="form-control" type="text" id="page_keyword" name="page_keyword" placeholder="Page Keywords" value="{{$job->navigation->page_keyword}}">
            </div>
            <div class="form-group col-md-12">
                <label for="page_description">Page Description</label>
                <textarea class="form-control" type="text" id="page_description" name="page_description" placeholder="Page Description" rows="3" style="resize: none;">{{$job->navigation->page_description}}</textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="is_active">Navigation Status <i class="reqr">*</i></label>
                <select class="form-control" id="is_active" name="nav_status">
                    <option value="1" {{($job->navigation->nav_status == 1)? 'selected' : ''}}>Active</option>
                    <option value="0" {{($job->navigation->nav_status == 0)? 'selected' : ''}}>De-active</option>
                </select>
            </div>
        </div> <!--/col-md-3-->
            
        <div class="clearfix"></div>

        <div class="col-md-12">
            <a class="btn btn-info form-control" id="go_to_save">Go to Update Button</a>
            
        </div>
                       
    </form>

</section>
@endsection

@section('scripts')
    <script>
        $(document).on('click', '#go_to_save', function(){
            goToByScroll('nav_save');
        });

        function goToByScroll(id){
          $('html,body').animate({scrollTop: $("#"+id).offset().top},'500');
        }


        //back
        $(document).ready(function(){
          $('.backlink').click(function(){
            parent.history.back();
            return false;
          });
        });
    </script>



<!--Youtube link  -->
    <script>
        $(document).on('keyup', '#video_link', function() {
            var y_link = $(this).val();
            if (embed_link = validateYouTubeUrl(y_link)) {
                $(this).val(embed_link);
            } else {
                $(this).val('');
                alert('Youtube Link is Invalid !');
            }
        });
    </script>


    <script>
        $('#nav_name').on('keyup',function(){
            var nav_name;
            nav_name = $('#nav_name').val();
            $('#page_keyword').val(nav_name);
            nav_name=nav_name.replace(/[^a-zA-Z0-9 ]+/g,"");
            nav_name=nav_name.replace(/\s+/g, "-");
            var pathArray = window.location.pathname.split( '/' );
            var url = "{{ url('/duplicate_alias') }}" + '/' + pathArray[2] + '/' + nav_name;

            $('#alias').val(nav_name.toLowerCase());
        });
    </script>
    <!-- end alias script -->

     <!-- page type script -->
    <script>
        
            $('#page_type').on('change',function(){

             var page_type = $('#page_type').val();
                if ((page_type == 'Normal') || (page_type == 'Group')) {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').show();
                    $('#long_content_nepali_div').show();
                    $('#attachment_div').hide();                 
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();           
                    $('#slider_div').hide();
                    
                } else if (page_type == 'Photo Gallery') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();                       
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').show();
                    $('#video_gallery_div').hide();           
                    $('#slider_div').hide();
                    
                } else if (page_type == 'Video Gallery') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();                       
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').show();            
                    $('#slider_div').hide();
                   
                } else if (page_type == 'File Group') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();                   
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();
                    $('#slider_div').hide();
                    
                } else if (page_type == 'Page Link') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();              
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();           
                    $('#slider_div').hide();
                   
                } else if (page_type == 'Link') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();                                
                    $('#url_link_div').show();
                    $('#url_link').prop('required', true);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();            
                    $('#slider_div').hide();
                    
                } else if (page_type == 'Slider') {
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').hide();                             
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();            
                    $('#slider_div').show();
                    
                } else if(page_type == 'Attachment'){
                    $('#short_content_div').show();
                    $('#short_content_nepali_div').show();
                    $('#long_content_div').hide();
                    $('#long_content_nepali_div').hide();
                    $('#attachment_div').show();                             
                    $('#url_link_div').hide();
                    $('#url_link').prop('required', false);
                    $('#photo_gallery_div').hide();
                    $('#video_gallery_div').hide();                    
                    $('#main_attachment').hide();  
                }
             });
        
        
    </script>

     <script>
        CKEDITOR.replace( 'short_content',{
            toolbar: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', '-', 'RemoveFormat' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize' ] }
            ],
            uiColor : '#3c8dbc',
            height: '100px',
            enterMode :CKEDITOR.ENTER_BR,
            filebrowserWindowWidth: '400',
            filebrowserWindowHeight: '300'
        });

        CKEDITOR.replace( 'short_content_nepali',{
            toolbar: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', '-', 'RemoveFormat' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize' ] }
            ],
            uiColor : '#3c8dbc',
            height: '100px',
            enterMode :CKEDITOR.ENTER_BR,
            filebrowserWindowWidth: '400',
            filebrowserWindowHeight: '300'
        });

    </script>
    
    <script>
        CKEDITOR.replace('long_content',{
            toolbar: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
                '/',
                { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                '/',
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize' ] },
                { name: 'others', items: [ '-' ] }
            ],
            uiColor : '#3c8dbc',
            height: '200px',
            enterMode :CKEDITOR.ENTER_BR,
            filebrowserWindowWidth: '400',
            filebrowserWindowHeight: '300',
             filebrowserBrowseUrl: '{{asset("assets/ckfinder/ckfinder.html")}}',
            filebrowserImageBrowseUrl : '{{asset("assets/ckfinder/ckfinder.html?type=Images")}}',
            filebrowserFlashBrowseUrl : '{{asset("assets/ckfinder/ckfinder.html?type=Flash")}}',
            filebrowserUploadUrl: '{{asset("assetsckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
            filebrowserImageUploadUrl : '{{asset("assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
            filebrowserFlashUploadUrl : '{{asset("assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
            
        });

        CKEDITOR.replace('long_content_nepali',{
            toolbar: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source' ] },
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll' ] },
                '/',
                { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'Iframe' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
                { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                '/',
                { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                { name: 'tools', items: [ 'Maximize' ] },
                { name: 'others', items: [ '-' ] }
            ],
            uiColor : '#3c8dbc',
            height: '200px',
            enterMode :CKEDITOR.ENTER_BR,
            filebrowserWindowWidth: '400',
            filebrowserWindowHeight: '300',
             filebrowserBrowseUrl: '{{asset("assets/ckfinder/ckfinder.html")}}',
            filebrowserImageBrowseUrl : '{{asset("assets/ckfinder/ckfinder.html?type=Images")}}',
            filebrowserFlashBrowseUrl : '{{asset("assets/ckfinder/ckfinder.html?type=Flash")}}',
            filebrowserUploadUrl: '{{asset("assetsckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
            filebrowserImageUploadUrl : '{{asset("assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
            filebrowserFlashUploadUrl : '{{asset("assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
            
        });
    </script>  


@endsection