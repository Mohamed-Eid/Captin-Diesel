<div class="row">                                    

    <form action="{{ route('dashboard.setting.update_about') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put') 

        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box-group" id="accordion">
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                    @php
                    $career_header = get_setting_by_key('career_header');

                    @endphp
                    
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                @lang('site.header')
                            </a>
                        </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>{{ $career_header->name }}</label>
                                        <input type="file" name="{{$career_header->id}}[image]" class="form-control" id="image-{{$career_header->id}}">
                                        
                                        <div class="form-group">
                                            <img src="{{ $career_header->image ? $career_header->image_path : '' }}"
                                                class="img-thumbnail" id="image-preview-{{$career_header->id}}" style="width: 100px;">
                                        </div>
                                        @push('scripts')
                                        <script>
                                            $("#image-{{$career_header->id}}").change(function() {
                                                if (this.files && this.files[0]) {
                                                    var reader = new FileReader();
                                    
                                                    reader.onload = function(e) {
                                                        $('#image-preview-{{$career_header->id}}').attr('src', e.target.result);
                                                    }
                                                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                                                }
                                            });
                                        </script>
                                        @endpush
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    @foreach(config('translatable.locales') as $locale)                             
                                    <div class="form-group">
                                        <label>@lang('site.header') </label>
                                        <textarea type="text" name="{{$career_header->id}}[{{$locale}}][description]" class="form-control" >{{$career_header->translate($locale)->description}}</textarea>
                                    </div>
                                    @endforeach
                
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

        
                    </div>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END ACCORDION & CAROUSEL-->

        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>@lang('site.save')
            </button>
        </div>

    </form>                                                    
</div>