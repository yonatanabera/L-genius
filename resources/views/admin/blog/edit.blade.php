{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h3>Edit Blog</h3>

 
    <div class="row">
        <div class="testimonial col-lg-10 shadow my-5 p-4 ">
            {{-- <h4 class="mb-4">Current Testimonial Name</h4> --}}

            <div class="mb-3" style="min-width: 150px; max-width:80%">
              <img src="/{{$data->photo}}" alt="..." class="img-thumbnail">
            </div>
          
            {!! Form::model($data, ['method'=>'PATCH','files'=>true ,'action'=>['BlogController@update', $data->id]]) !!}
                

                    <div class="form-group">
                                
                                
                        {!! Form::label('photo', 'Photo', ['style'=>'display:block'] ) !!}
                        {!! Form::file('photo', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group ">
                       

                        {!! Form::label('title', 'Title' ) !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}

                        @error('title')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                      
                        {!! Form::label('category', 'Category' ) !!}
                        {!! Form::select('category', $category, null, ['class'=>'form-control']) !!}

                        @error('category')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="md-form my-5">

                        
                      {!! Form::label('short_note', 'Short Note' ) !!}
                      {!! Form::textarea('short_note', null, ['class'=>'form-control ', 'rows'=>10]) !!}

                      @error('short_note')
                          <span class="text-warning" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  
                    <div class="md-form my-5">

                        
                        {!! Form::label('content', 'Content' ) !!}
                        {!! Form::textarea('content', null, ['class'=>'form-control content']) !!}

                        @error('content')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        

                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                    </div>
            
            </form>
        </div>


    
    </div>
    
</div>
@endsection



@section('scripts')
{{-- <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script> --}}



<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.content",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endsection