<x-header />
<div>
    <div id="main-content">
        <h2>Add New Record</h2>
        <form class="post-form" method="post" action="/store" enctype="multipart/form-data">
            @if ($message = Session::get('success'))
                <h3 class="success-message">{{ $message }}</h3>
            @endif  
            @csrf
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" />
                @if ($errors->has('name'))
                    <span class="text-danger error">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Address <span class="text-danger">*</span></label>
                <input type="text" name="address" value="{{ old('address') }}" />
                @if ($errors->has('address'))
                    <span class="text-danger error">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Class <span class="text-danger">*</span></label>
                <select name="class" value="{{ old('class') }}">
                    <option value="" selected disabled>Select Class</option>
                    <option value="1">BBA</option>
                </select>
                @if ($errors->has('class'))
                    <span class="text-danger error">{{ $errors->first('class') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" maxlength="10" pattern="[0-9]{10}" value="{{ old('phone') }}" />
                @if ($errors->has('phone'))
                    <span class="text-danger error">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Upload Img</label>
                <input type="file" name="new_img" value="{{ old('new_img') }}" />
                @if ($errors->has('new_img'))
                    <span class="text-danger error">{{ $errors->first('new_img') }}</span>
                @endif
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</div>
<x-footer />
