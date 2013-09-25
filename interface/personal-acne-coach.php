<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li class="active"><a href="">Dashboard</a></li>
    </ul>
    <!-- END Navigation info -->
<form class="form-horizontal form-box" onsubmit="return false;">
                        <h4 class="form-box-header">Textareas</h4>
                        <div class="form-box-content">
                            <div class="control-group">
                                <label class="control-label" for="example-textarea">Default</label>
                                <div class="controls">
                                    <textarea id="example-textarea" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Disabled</label>
                                <div class="controls">
                                    <textarea class="uneditable-textarea" rows="3" disabled="">This is a disabled textarea!</textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="example-textarea-large">Large</label>
                                <div class="controls">
                                    <textarea id="example-textarea-large" class="textarea-large" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="example-textarea-editor">WYSIWYG Editor</label>
                                <div class="controls">
                                    <ul id="example-textarea-editor-wysihtml5-toolbar" class="wysihtml5-toolbar" style=""><li class="dropdown"><a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-font"></i>&nbsp;<span class="current-font">Normal text</span>&nbsp;<b class="caret"></b></a><ul class="dropdown-menu"><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" href="javascript:;" unselectable="on">Normal text</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" href="javascript:;" unselectable="on">Heading 1</a></li><li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" href="javascript:;" unselectable="on">Heading 2</a></li></ul></li><li><div class="btn-group"><a class="btn" data-wysihtml5-command="bold" title="CTRL+B" href="javascript:;" unselectable="on">Bold</a><a class="btn" data-wysihtml5-command="italic" title="CTRL+I" href="javascript:;" unselectable="on">Italic</a></div></li><li><div class="btn-group"><a class="btn" data-wysihtml5-command="insertUnorderedList" title="Unordered List" href="javascript:;" unselectable="on"><i class="icon-list"></i></a><a class="btn" data-wysihtml5-command="insertOrderedList" title="Ordered List" href="javascript:;" unselectable="on"><i class="icon-th-list"></i></a><a class="btn" data-wysihtml5-command="Outdent" title="Outdent" href="javascript:;" unselectable="on"><i class="icon-indent-right"></i></a><a class="btn" data-wysihtml5-command="Indent" title="Indent" href="javascript:;" unselectable="on"><i class="icon-indent-left"></i></a></div></li><li><div class="bootstrap-wysihtml5-insert-link-modal modal hide fade"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Insert Link</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-link-url input-xlarge"></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a></div></div><a class="btn" data-wysihtml5-command="createLink" title="Link" href="javascript:;" unselectable="on"><i class="icon-share"></i></a></li><li><div class="bootstrap-wysihtml5-insert-image-modal modal hide fade"><div class="modal-header"><a class="close" data-dismiss="modal">×</a><h3>Insert Image</h3></div><div class="modal-body"><input value="http://" class="bootstrap-wysihtml5-insert-image-url input-xlarge"></div><div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Cancel</a><a href="#" class="btn btn-primary" data-dismiss="modal">Insert image</a></div></div><a class="btn" data-wysihtml5-command="insertImage" title="Insert image" href="javascript:;" unselectable="on"><i class="icon-picture"></i></a></li></ul><textarea id="example-textarea-editor" class="textarea-editor textarea-large" rows="10" style="display: none;"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="background-color: rgb(255, 255, 255); border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 4px 6px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: middle; text-align: start; box-sizing: border-box; -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; border-top-left-radius: 0px; width: 684.9375px; height: 210px;"></iframe>
                                    <span class="help-block">Add the <code>.textarea-editor</code> class to a textarea to transform it into a wysiwyg editor</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="example-textarea-elastic">Elastic</label>
                                <div class="controls">
                                    <textarea id="example-textarea-elastic" class="textarea-elastic" rows="3" style="overflow: hidden; height: 70px;"></textarea>
                                    <span class="help-block">Add the <code>.textarea-elastic</code> class to a textarea and will auto expand as you write</span>
                                <div style="position: absolute; display: none; word-wrap: break-word; white-space: pre-wrap; border: 1px solid rgb(204, 204, 204); font-weight: 400; width: 192px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 20px; font-size: 14px; padding: 4px 6px;">&nbsp;</div></div>
                            </div>
                            <div class="form-actions">
                                <button class="btn btn-success"><i class="icon-save"></i> Save</button>
                                <button class="btn btn-danger"><i class="icon-remove"></i> Delete</button>
                            </div>
                        </div>
                    </form>

</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>



      <script>
            $(function() {
                /* Initialize FullCalendar */
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();

                $('#example-fullcalendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    editable: true,
                    events: [
                        {
                            title: 'Relax Day',
                            start: new Date(y, m, 1)
                        },
                        {
                            title: 'Project #1',
                            start: new Date(y, m, 5),
                            end: new Date(y, m, 10)
                        },
                        {
                            id: 999,
                            title: 'Gym (repeated)',
                            start: new Date(y, m, d - 4, 18, 0),
                            allDay: false
                        },
                        {
                            id: 999,
                            title: 'Gym (repeated)',
                            start: new Date(y, m, d + 3, 18, 0),
                            allDay: false
                        },
                        {
                            title: 'Lunch',
                            start: new Date(y, m, d, 13, 00),
                            allDay: false
                        },
                        {
                            title: 'Project #2',
                            start: new Date(y, m, d, 8, 0),
                            end: new Date(y, m, d, 13, 0),
                            allDay: false
                        },
                        {
                            title: 'Party',
                            start: new Date(y, m, d + 6, 19, 0),
                            end: new Date(y, m, d + 6, 22, 30),
                            allDay: false
                        },
                        {
                            title: 'Follow me on Twitter',
                            start: new Date(y, m, 26),
                            end: new Date(y, m, 26),
                            url: 'http://twitter.com/pixelcave'
                        }
                    ]
                });

                /* Initialize FullCalendar with drag and drop events, Demo from http://arshaw.com/fullcalendar/ */
                $('#fc-external-events .fc-external-event').each(function() {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    };

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 999,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 100  //  original position after the drag
                    });
                });

                $('#example-fullcalendar2').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    firstDay: 1,
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#example-fullcalendar2').fullCalendar('renderEvent', copiedEventObject, true);
                    }
                });
            });
        </script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>