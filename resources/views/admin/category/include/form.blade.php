
    <div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="title"> Title </label>
        <div class="col-sm-9">
            <input type="text" id="title" name="title" placeholder="Title"
                   class="col-xs-10 col-sm-5" value="{{ old('title') }}"   >
            @if($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
        </div>
    </div>

    @if(isset($data['row']))
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="existing_image">Existing Image </label>
            <div class="col-sm-9">
                @if($data['row']->image)
                    <img src="{{ asset('images/category/'.$data['row']->image) }}" width="90" alt="">
                @else
                    <p>No image</p>
                @endif
            </div>
        </div>
        @else
        @endif

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="image"> Image </label>
        <div class="col-sm-9">
            <input type="file" id="image" name="main_image"  class="col-xs-10 col-sm-5" >
            @if($errors->has('main_image'))
                 <span class="text-danger">{{ $errors->first('main_image') }}</span>
                @endif
        </div>
    </div>


    <div class="control-group">
        <label class="col-sm-3 control-label no-padding-right" for="status"> Status </label>
        <div class="radio">
            <label>
                <input name="status" type="radio" class="ace"  value="active"  checked="checked">
                <span class="lbl"> Active</span>

            </label>

                <label>
                    <input name="status" type="radio" class="ace" value="in-active" >
                    <span class="lbl"> Inactive</span>
                </label>


        </div>
    </div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                Submit
            </button>            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                Reset
            </button>
        </div>
    </div>



