
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
                    <img src="{{ asset('images/news/'.$data['row']->image) }}" width="90" alt="">
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

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="writer"> Writer </label>
        <div class="col-sm-9">
            <input type="text" id="writer" name="writer" placeholder="Writer name"
                   class="col-xs-10 col-sm-5" value="{{ old('writer') }}"   >
            @if($errors->has('writer'))
                <span class="text-danger">{{ $errors->first('writer') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="short_des"> Short Description </label>
        <div class="col-sm-9">
            <textarea rows="3" class="col-xs-10 col-sm-5" id="short_des" name="short_des" >{{ old('short_des') }}</textarea>
            @if($errors->has('short_des'))
                <span class="text-danger">{{ $errors->first('short_des') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="detail_des"> Details</label>
        <div class="col-sm-9">
            <textarea rows="3" class="col-xs-10 col-sm-5" id="detail_des" name="detail_des" >{{ old('detail_des') }}</textarea>
            @if($errors->has('detail_des'))
                <span class="text-danger">{{ $errors->first('detail_des') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right date-picker" for="public_data"> Public Date </label>
        <div class="col-sm-9">
            <input type="date" id="public_data" name="public_data" placeholder="Date"
                   class="col-xs-10 col-sm-5" value="{{ old('public_data') }}"   >
            @if($errors->has('public_data'))
                <span class="text-danger">{{ $errors->first('public_data') }}</span>
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



