<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<style type="text/css">
.control-label{
    font-size:12px;
}

.controls select{
    width:100%;
    height:24px;
    margin-bottom:5px;
}
.control-group{
    margin-bottom:0px;
    }
</style>
<!-- Page Content -->
<div id="page-content">
    
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li class="active"><a href="">Dashboard</a></li>
    </ul>
    <!-- END Navigation info -->


    <h3 class="page-header page-header-top">Clear Tracker Pro</h3>

    <!-- Nav Dash -->
    <ul class="nav-dash">
     <!--    <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Update My Regimen">
                <i class="icon-user"></i>
            </a>
        </li> -->
        
     <!--    <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Schedule an Appointment with your Personal Acne Coach">
                <i class="icon-calendar"></i> <span class="badge badge-inverse"></span>
            </a>
        </li> -->
  <!--       <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Upload a New Picture">
                <i class="icon-camera-retro"></i>
                <span class="badge badge-important">1</span>
            </a>
        </li> -->
        
     <!--    <li>
            <a href="javascript:void(0)" data-toggle="tooltip" title="Account Settings">
                <i class="icon-cogs"></i>
            </a>
        </li> -->
    </ul>
    <!-- END Nav Dash -->

       <div class="row-fluid">
        
         <div class="span3">
            <!-- Alerts Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    
                   Michael Chacon
                </div>
                <div class="dash-tile-content">

                    <img src="http://mikechacon.com/wp-content/uploads/2011/03/196519_10100499378638053_5207312_67500951_3793104_n.jpeg"/>
                    <div class="dash-tile-content-inner scrollable-tile-2x">
                        
                    <form class="" onsubmit="return false;">
                    <br  />
                  <!--      <div class="control-group">
                                <label class="control-label" for="example-textarea">Name</label>
                                <div class="controls">
                                    <span class="btn">Michael Chacon</span>
                                </div>
                            </div> -->

<!-- <h4 class="form-box-header">My Regimen</h4> -->
                       
                        
                         <h4 style="border-bottom:1px solid #dfdfdf;text-align:center;">My Regimen</h4>
                            <!-- Timepicker -->
                          <h5 style="text-align:center;">Morning</h5>
                                <div class="control-group">
                                <label class="control-label" for="example-select">Wash</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>Clearasil</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="example-select">Moisterizer</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>Neutragena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                            </div>

                          <div class="control-group">
                                <label class="control-label" for="example-select">Treatment</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>Clear Clinic</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                            </div>
  <h5 style="text-align:center;">Evening</h5>
                                <div class="control-group">
                                <label class="control-label" for="example-select">Wash</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>html</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label" for="example-select">Moisterizer</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>html</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                            </div>

                          <div class="control-group">
                                <label class="control-label" for="example-select">Treatment</label>
                                <div class="controls">
                                    <select id="example-select">
                                        <option>html</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select>
                                </div>
                        
                            </div>

                            <!-- END Daterangepicker -->

                        <!--     <div class="form-actions">
                                <button class="btn btn-success"><i class="icon-check"></i> Save</button>
                                <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button>
                            </div> -->
                        </div>


                   
                    </form>



                    </div>
                </div>
            </div> 

        <div class="span6">
             <table id="example-editable-datatables" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <!-- <th class="span1"></th> -->
                <th class="span1 hidden-phone"><i class="icon-calendar"></i></th>
                <th>Complection</th>
                <th>Color</th>
                <!-- <th class="hidden-phone hidden-tablet"><i class="icon-envelope-alt"></i> Email</th> -->
                <th> Compliance</th>
                <th> Photo</th>
                <th> Notes</th>
            </tr>
        </thead>
        <tbody>

             <tr>
           <!--      <td class="span1">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                    </div>
                </td> -->
                <td class="span1 hidden-phone">This Week</td>
                
                 <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>
                
                <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>
                <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>
                <!-- <td class="hidden-phone hidden-tablet">user<?php echo $i; ?>@example.com</td> -->
                
                <td style="text-align:center;">   <a href="javascript:void(0)" data-toggle="tooltip" title="Upload a New Picture">
                <i style="font-size:42px;" class="icon-camera-retro"></i>
<!--                 <span class="badge badge-important">1</span> -->
            </a></td>
                <?php $rand = rand(0, 5); ?>
                
                <td id="notes30" class="editable-td hidden-phone ">Add Notes</td>
            </tr>
            <?php
            $labels['0']['class'] = "label-success";
            $labels['0']['text'] = "100% - Great Job!";
            $labels['1']['class'] = "label-success";
            $labels['1']['text'] = "100%";
            $labels['2']['class'] = "label-success";
            $labels['2']['text'] = "100%";
            $labels['3']['class'] = "label-success";
            $labels['3']['text'] = "100%";
            $labels['4']['class'] = "label-warning";
            $labels['4']['text'] = "50% - You Missed One";
            $labels['5']['class'] = "label-important";
            $labels['5']['text'] = "25%";
            ?>
            <?php for($i=1; $i<8; $i++) { ?>
            <tr>
           <!--      <td class="span1">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                    </div>
                </td> -->
                <td class="span1 hidden-phone">Week of 9/<?php echo $i * 7;?>   </td>
                
                  <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>
                
                 <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>

                 <td style="text-align:center;">
                    <img width="32" height="32" src="https://cdn1.iconfinder.com/data/icons/lin/128/7.png">
                </td>
                <!-- <td class="hidden-phone hidden-tablet">user<?php echo $i; ?>@example.com</td> -->
                
                <td style="text-align:center;"><img width="100" src="http://mikechacon.com/wp-content/uploads/2011/03/196519_10100499378638053_5207312_67500951_3793104_n.jpeg"></td>
                <?php $rand = rand(0, 5); ?>
                
                <td id="notes30" class="editable-td hidden-phone ">Notes</td>
            </tr>
            
            <?php } ?>
        
        </tbody>
    
    </table>

    
                
                <!-- END Page Content -->
        
        </div> 
             <!-- Column 3 of Row 2 -->
        <div class="span3">
            <!-- Alerts Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    
                    My Personal Acne Coach
                </div>
                <div class="dash-tile-content">
                    
                        
                    <form class="" onsubmit="return false;">
                             

                                                          <img src="http://www.mashovinhhc.com/Smiling%20Nurse.jpg"/> <br  />
<br  />
                            <div class="control-group">
                                <label class="control-label" for="example-textarea">Name</label>
                                <div class="controls">
                                   <input type="text" class="" value ="Julie Lastname"/>

                                </div><br  />
                       <div class="control-group">
                                <label class="control-label" for="example-textarea">Next Appointment</label>
                                <div class="controls">
                                    <span class="btn disabled">09/11/13</span>
                                </div>
                            </div>
  
                            </div>
                               <div class="control-group">
                                <label class="control-label" for="example-textarea">Last Appointment</label>
                                <div class="controls">
                                   <span class="btn disabled">12/11/13</span>

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="example-textarea">Notes</label>
                                <div class="controls">
                                    <textarea id="example-textarea" class="disabled btn" rows="3" value="Remember to keep up with your regimen.">Remember to keep up with your regimen.</textarea>
                                </div>
                            </div>
                          
                     
                        
                    </form>



                    
                </div>
            </div>
            <!-- END Alerts Tile -->
        </div>
        <!-- END Column 3 of Row 2 -->
        
</div>

    <!-- Row 2 -->
    <div class="row-fluid">
        <!-- Column 1 of Row 2 -->


             
                     
        <!-- END Column 1 of Row 2 -->

        <!-- Column 2 of Row 2 -->
        <div class="span3" style="display:none;">
            <!-- Projects Tile -->
            <div class="dash-tile dash-tile-2x">
                <div class="dash-tile-header">
                    <div class="dash-tile-options">
                        <a href="javascript:void(0)" class="btn" data-toggle="tooltip" title="Manage projects"><i class="icon-cog"></i></a>
                    </div>
                    Projects
                </div>
                <div class="dash-tile-content">
                    <div class="dash-tile-content-inner scrollable-tile-2x">
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#1 - Project</a></h5>
                        <div class="progress progress-success">
                            <div class="bar" style="width: 100%"><i class="icon-ok"></i> Done!</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#2 - Project</a></h5>
                        <div class="progress progress-success">
                            <div class="bar" style="width: 75%">75%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#3 - Project</a></h5>
                        <div class="progress progress-warning">
                            <div class="bar" style="width: 50%">50%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#4 - Project</a></h5>
                        <div class="progress progress-danger">
                            <div class="bar" style="width: 20%">20%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#5 - Project</a></h5>
                        <div class="progress progress-success">
                            <div class="bar" style="width: 85%">85%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#6 - Project</a></h5>
                        <div class="progress progress-success">
                            <div class="bar" style="width: 95%">95%</div>
                        </div>
                        <h5 class="page-header-sub"><a href="javascript:void(0)">#7 - Project</a></h5>
                        <div class="progress progress-warning">
                            <div class="bar" style="width: 60%">60%</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Projects Tile -->
        </div>
        <!-- END Column 2 of Row 2 -->

       
    </div>
    <!-- END Row 2 -->

 
    <!-- END Tiles -->
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
            <script>
            $(function() {

                // Hold our table to a variable
                var exampleDatatable = $('#example-editable-datatables');

                /*
                 * Function for handing the data after a cell has been edited
                 *
                 * From here you can send the data with ajax (for example) to handle in your backend
                 *
                 */
                var reqHandle = function(value, settings) {

                    // this, the edited td element
                    console.log(this);

                    // $(this).attr('id'), get the id of the edited td
                    console.log($(this).attr('id'));

                    // $(this).parent('tr').attr('id'), get the id of the row
                    console.log($(this).parent('tr').attr('id'));

                    // value, the new value the user submitted
                    console.log(value);

                    // settings, the settings of jEditable
                    console.log(settings);

                    // Here you can send and handle the data in your backend
                    // ...

                    // For this example, just return the data the user submitted
                    return(value);
                };

                /*
                 * Function for initializing jEditable handlers to the table
                 *
                 * For advance usage you can check http://www.appelsiini.net/projects/jeditable
                 *
                 */
                var initEditable = function(rowID) {

                    // Hold the elements that the jEditable with be initialized
                    var elements;

                    // If we don't have a rowID apply to all td elements with .editable-td class
                    if (!rowID)
                        elements = $('td.editable-td', editableTable.fnGetNodes());
                    else
                        elements = $('td.editable-td', editableTable.fnGetNodes(rowID));

                    elements.editable(reqHandle, {
                        "callback": function(sValue, y) {
                            // Update the table cell after the edit has been processed
                            var aPos = editableTable.fnGetPosition(this);
                            editableTable.fnUpdate(sValue, aPos[0], aPos[1]);

                            // Little fix for responsive table after edit
                            exampleDatatable.css('width', '100%');
                        },
                        "submitdata": function(value, settings) {
                            // Sent some extra data
                            return {
                                "row_id": this.parentNode.getAttribute('id'),
                                "column": editableTable.fnGetPosition(this)[2]
                            };
                        },
                        indicator: '<i class="icon-spinner icon-spin"></i>',
                        cssclass: 'remove-margin',
                        submit: 'Ok',
                        cancel: 'Cancel'
                    });
                };

                /*
                 * Function for deleting table row
                 *
                 */
                var delHandle = function() {

                    // When the user clicks on a delete button
                    $('body').on('click', 'a.delRow', function() {
                        var aPos = editableTable.fnGetPosition(this.parentNode);
                        var aData = editableTable.fnGetData(aPos[0]);
                        var rowID = $(this).parents('tr').attr('id');

                        // Here you can handle the deletion of the row in your backend
                        // ...

                        // Delete row if success with the backend
                        editableTable.fnDeleteRow(aPos[0]);
                    });
                };

                /*
                 * Function for adding table row
                 *
                 */
                var addHandle = function() {

                    // When the user clicks on the 'Add New User' button
                    $("#addRow").click(function() {

                        // Here you can handle your backend data (eg: adding a row to database and return the id of the row)

                        // ..

                        // Create a new row and set it up
                        var rowID = editableTable.fnAddData(['', '', '', '', '']);

                        // Example id, here you should add the one you created in your backend
                        var id = rowID[0] + 1;

                        // Update the id cell, so that our table redraw and resort (new row goes first in datatable)
                        editableTable.fnUpdate(id, rowID[0], 1);

                        // Get the new row
                        var nRow = editableTable.fnGetNodes(rowID[0]);

                        /*
                         * In the following section you should set up your cells
                         */
                        // Add id to tr element
                        $(nRow).attr('id', id);

                        // Setup first cell with the delete button
                        $(nRow)
                            .children('td:nth-child(1)')
                            .addClass('text-center')
                            .html('<a href="javascript:void(0)" id="delRow' + id + '" class="btn btn-mini btn-danger delRow"><i class="icon-remove"></i></a>');

                        // Setup second cell (id)
                        $(nRow)
                            .children('td:nth-child(2)')
                            .attr('id', 'id' + id)
                            .addClass('span1')
                            .addClass('text-center');

                        // Setup third cell (username)
                        $(nRow)
                            .children('td:nth-child(3)')
                            .addClass('editable-td')
                            .attr('id', 'username' + id);

                        // Setup fourth cell (email)
                        $(nRow)
                            .children('td:nth-child(4)')
                            .addClass('editable-td')
                            .addClass('hidden-phone')
                            .attr('id', 'email' + id);

                        // Setup fifth cell (notes)
                        $(nRow)
                            .children('td:nth-child(5)')
                            .addClass('editable-td')
                            .addClass('hidden-phone')
                            .attr('id', 'notes' + id);

                        // Setup your other cells the same way (if you have more)
                        // ...

                        // Initialize jEditable to the new row
                        initEditable(rowID[0]);

                        // Little fix for responsive table after adding a new row
                        exampleDatatable.css('width', '100%');
                    });
                };

                // Initialize Datatables
                var editableTable = exampleDatatable.dataTable({
                    "aaSorting": [[1, 'desc']],
                    "aoColumnDefs": [{
                            "bSortable": false,
                            "aTargets": [0]
                        }]
                });

                // Initialize jEditable
                initEditable();

                // Handle rows deletion
                delHandle();

                // Handle new rows
                addHandle();
            });
        </script>


<?php include 'inc/bottom.php'; // Close body and html tags ?>