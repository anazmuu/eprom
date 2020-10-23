                <form method="POST">
                    <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose shadow-ct" style='margin-bottom:20px;'>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs h4">
                                    New message
                                </div>
                            </div>
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">To:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input name="email" type="text" class="form-control input-sm" placeholder="example@email.com">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Cc:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input id="recipient_email" type="text" class="form-control input-sm">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Subject:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" class="form-control input-sm" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 control-label text-left">Email:</label>
                                            <div class="col-lg-11 col-md-12 col-sm-12 col-xs-12">
                                                <textarea type="text" class="form-control input-sm" placeholder="Subject"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body no-padding">
                                <div class="summernote6">
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="pull-right">
                                    <div class="btn-group active-hook">
                                        <button class="btn btn-default"><i class="fa fa-edit"></i> Save</button>
                                        <button class="btn btn-default"><i class="fa fa-trash"></i> Discard</button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary ft-compse">Send email</button>
                                <button id="upload" class='btn btn-default'><i class="fa fa-paperclip"></i></button>
                                <button id="upload" class='btn btn-default'><i class="fa fa-image"></i></button>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </form>
                <script>
                    function Upload_On_Click(id, handler) {
                        var hidden_input = null;
                        document.getElementById(id).onclick = function() {
                            hidden_input.click();
                        }

                        function setup_hidden_input() {
                            hidden_input && hidden_input.parentNode.removeChild(hidden_input);
                            hidden_input = document.createElement("input");
                            hidden_input.setAttribute("type", "file");
                            hidden_input.style.visibility = "hidden";
                            document.querySelector("body").appendChild(hidden_input);
                            hidden_input.onchange = function() {
                                handler(hidden_input.files[0]);
                                setup_hidden_input();
                            };
                        }
                        setup_hidden_input();
                    }

                    Upload_On_Click("upload", function(file) {
                        console.log("GOT FILE: " + file.name);
                    });
                </script>