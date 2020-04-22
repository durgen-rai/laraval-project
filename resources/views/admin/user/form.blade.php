<div class="form-group">

    <label class="col-sm-3 control-label no-padding-right" for="username"> Username </label>
    <div class="col-sm-9">
        <input type="text" id="username" name="username" placeholder="Username" class="col-xs-10 col-sm-5"
               value="{{ old('username', $user->username) }}">
        @if($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
    </div>

</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="email"> Email </label>
    <div class="col-sm-9">
        <input type="email" id="email" name="email" placeholder="Email" class="col-xs-10 col-sm-5"
               value="{{ old('email', $user->email) }}">
        @if($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="passowrd"> Password </label>
    <div class="col-sm-9">
        <input type="password" id="password" name="password" placeholder="Password" class="col-xs-10 col-sm-5"
               value="{{ old('password') }}">
        @if($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
    </div>

</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="full_name"> Full Name </label>
    <div class="col-sm-9">
        <input type="text" id="full_name" name="full_name" placeholder="Full Name" class="col-xs-10 col-sm-5"
               value="{{ old('full_name', $user->full_name) }}">
        @if($errors->has('full_name'))
            <span class="text-danger">{{ $errors->first('full_name') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="contact_no"> Contact No </label>
    <div class="col-sm-9">
        <input type="text" id="contact_no" name="contact_no" placeholder="Mobile No" class="col-xs-10 col-sm-5"
               value="{{ old('contact_no', $user->contact_no) }}">
        @if($errors->has('contact_no'))
            <span class="text-danger">{{ $errors->first('contact_no') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="address"> Address </label>
    <div class="col-sm-9">
        <textarea rows="3" class="col-xs-10 col-sm-5" id="address" name="address">{{ old('address', $user->address) }}</textarea>
        @if($errors->has('address'))
            <span class="text-danger">{{ $errors->first('address') }}</span>
        @endif
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label no-padding-right" for="gender"> Gender </label>
    <div class="col-sm-9">
        <select name="gender" class="col-xs-10 col-sm-5">
            <option value="">--Please Select--</option>
            <option {{ old('gender', $user->gender)=="Male" ? 'selected' : '' }} value="Male">Male</option>
            <option {{ old('gender', $user->gender)=="Female" ? 'selected' : '' }} value="Female">Female</option>
        </select>
        @if($errors->has('gender'))
            <span class="text-danger">{{ $errors->first('gender') }}</span>
        @endif
    </div>
</div>
<div class="control-group">
    <label class="col-sm-3 control-label no-padding-right" for="status"> Status </label>
    <div class="radio">
        <label>
            <input name="status" type="radio" class="ace" value="1" {{ old('status', $user->status)=="1" ? 'checked' : '' }}>
            <span class="lbl"> Active</span>
        </label>
        <label>
            <input name="status" type="radio" class="ace" value="0" {{ old('status', $user->status)=="0" ? 'checked' : '' }}>
            <span class="lbl"> Inactive</span>
        </label>
    </div>
</div>


<div class="clearfix form-actions">
    <div class="col-md-offset-3 col-md-9">
        <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
        </button> &nbsp; &nbsp; &nbsp;
        <button class="btn" type="reset">
            <i class="ace-icon fa fa-undo bigger-110"></i>
            Reset
        </button>
    </div>
</div>


