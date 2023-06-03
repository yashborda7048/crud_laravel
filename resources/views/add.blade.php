<x-header />
<div>
    <div id="main-content">
        <h2>Add New Record</h2>
        <form class="post-form" method="post" action="/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" required/>
            </div>
            <div class="form-group">
                <label>Address <span class="text-danger">*</span></label>
                <input type="text" name="address" required/>
            </div>
            <div class="form-group">
                <label>Class <span class="text-danger">*</span></label>
                <select name="class" required>
                    <option value="" selected disabled>Select Class</option>
                    <option value="1" >BBA</option>
                </select>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" name="phone" maxlength="10" pattern="[0-9]{10}"/>
            </div>
            <div class="form-group">
                <label>Upload Img</label>
                <input type="file" name="new_img" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</div>
<x-footer />
