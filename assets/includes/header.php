<!-- Home / CV -->
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="#">CV</a></li>
    </ol>
</nav>


<!-- Forms -->
<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Categories</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Title</label>

            <div class="col-md-5">
                <input id="title" name="title" type="text" placeholder="Category Title" class="form-control input-md"
                       required="">
                <span class="help-block">Enter a category title</span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="permLink">PermLink</label>

            <div class="col-md-5">
                <input id="permLink" name="permLink" type="text" placeholder="" class="form-control input-md"
                       required="">
                <span class="help-block">Create a perm link in order to show SEO</span>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="description">Description</label>

            <div class="col-md-4">
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="parentCategory">Parent Category</label>

            <div class="col-md-5">
                <select id="parentCategory" name="parentCategory" class="form-control">
                </select>
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="saveBtn"></label>

            <div class="col-md-8">
                <button id="saveBtn" name="saveBtn" class="btn btn-success">Save</button>
                <button id="cancelBtn" name="cancelBtn" class="btn btn-inverse">Cancel</button>
            </div>
        </div>

    </fieldset>
</form>