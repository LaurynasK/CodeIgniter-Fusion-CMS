<div id="page-wrapper">

    <div class="container-fluid">
        <div class="col-lg-9">
            
            <div class="menu_builder">
                <ul>
                    <li><a id="new-file" href="#new-file"> New File </a></li>
                    <li><a id="save" href="#save">Save <i>[CTRL] + [S]</i> </a></li>
                    <li><a id="delete" href="#delete">Delete</a></li>
                    <li><a id="upload-file" href="#upload_file" > Upload File </a></li>
                    <li><a id="rename-file" href="#rename_file" > Rename File </a></li>
                </ul>
                <br />
            </div>
            
            <div id='tabs'>
                <ul>
                    <script id="tab-Li-Template" type="text/template">
                        <li><a href='#{{titleModified}}'> {{title}} </a><span class='ui-icon ui-icon-circle-close ui-closable-tab'></span></li>
                    </script>
                </ul>
                
                <script id="tab-Div-Template" type="text/template">
                    <div id='{{titleModified}}'> {{fileContent}} </div>
                </script>
                
            </div>

        </div>
        <div class="col-lg-3">

            <div class="menu_builder">
                <ul>
                    <li><a id="mk-dir" href="#mk-dir">+ Create Directory</a></li>
                    <li><a id="rm-dir" href="#rm-dir">- Delete Directory</a></li>
                    <li><a id="reload" href="#reload">Reload Tree</a></li>
                </ul>
                <br />
            </div>
            <div id="file-map">
                
                
                
            </div>
        </div>

        <div id="new-file-dialog" title="Add New File">
            
            <script id="newFileDialog" type="text/template">
                <div class='form-group'>
                    <br>
                    <input type='text' class='form-control' placeholder='location' name='location' />
                    <br>
                    <button id='create-new-file' class='btn btn-primary'>Create</button>
                </div>
            </script>
            
        </div>
        
        <div id="delete-file-dialog" title="Delete File">
            
            <script id="deleteFileDialog" type="text/template">
                <div class='form-group'>
                    <br>
                    <input type='text' class='form-control' placeholder='location' name='del-location' >
                    <br>
                    <button id='delete-file' class='btn btn-danger'>Delete</button>
                </div>
            </script>
            
        </div>
        
        <div id="make-dir-dialog" title="Create directory">
            
            <script id="makeDirDialog" type="text/template">
                <div class='form-group'>
                    <input type='text' class='form-control' placeholder='location' name='mk-dir-location'>
                    <button id='create-directory' class='btn btn-primary'>Create</button>
                </div>
            </script>
            
        </div>
        
        <div id="rm-dir-dialog" title="Delete directory">
            
            <script id="removeDirDialog" type="text/template">
                <div class='form-group'>
                    <input type='text' class='form-control' placeholder='location' name='rm-dir-location'>
                    <button id='delete-directory' class='btn btn-danger'>Delete</button>
                </div>
            </script>
            
        </div>
        
        <div id="upload-file-dialog" title="Upload File" class="hidden">
                
                <div class="dropzone">
		            <div class="dz-message">
			            <h3> Drag and Drop your files here Or Click here to upload</h3>
			            <p>Your files will be uploaded</p>
			            <p><i>click on folder in file tree</i></p>
			            <p id="uploadPath"> main/ </p>
		            </div>
	            </div>
            
        </div>
        
        <div id="rename-file-dialog" title="Rename File" class="hidden">
            <div class="rename-message">
			     <h4> hold [SHIFT] and then push mouse left button </h4>
			     <h4>on choosen file in the file tree</h4>
	        </div>
        </div>

    </div>
</div>

