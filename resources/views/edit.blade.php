<x-header />
<div>
    <div id="main-content">
        <h2>Update Record #{{ $student->id }}</h2>
        <form class="post-form" method="post" action="/update/{{ $student->id }}" enctype="multipart/form-data">
            @if ($message = Session::get('success'))
                <h3 class="success-message">{{ $message }}</h3>
            @endif
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name', $student->name) }}" />
                @if ($errors->has('name'))
                    <span class="text-danger error">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Address <span class="text-danger">*</span></label>
                <input type="text" name="address" value="{{ old('address', $student->address) }}" />
                @if ($errors->has('address'))
                    <span class="text-danger error">{{ $errors->first('address') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Class <span class="text-danger">*</span></label>
                <select name="class" value="{{ old('class', $student->class) }}">
                    <option value="" selected disabled>Select Class</option>
                    <option value="1">BCOM</option>
                    <option value="2">BBA</option>
                    <option value="3">BCA</option>
                    <option value="4">MBA</option>
                    <option value="5">MCOM</option>
                    <option value="6">MSC</option>
                </select>
                @if ($errors->has('class'))
                    <span class="text-danger error">{{ $errors->first('class') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" maxlength="10" pattern="[0-9]{10}"
                    value="{{ old('phone', $student->phone) }}" />
                @if ($errors->has('phone'))
                    <span class="text-danger error">{{ $errors->first('phone') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label>Upload Img</label>
                <input type="hidden" name="img" value="{{ old('phone', $student->img) }}" />
                <input type="file" name="new_img" value="{{ old('new_img') }}" />
                @if ($errors->has('new_img'))
                    <span class="text-danger error">{{ $errors->first('new_img') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for=""></label>
                <img width="250px" height="250px" src="{{ asset('assets/img/' . $student->img) }}"
                    alt="{{ $student->img }}">
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</div>
<x-footer />
