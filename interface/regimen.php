<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php'; // Meta data and header ?>
<?php include 'inc/nav.php'; // Navigation content ?>

<!-- Page Content -->
<div id="page-content">
    <!-- Navigation info -->
    <ul id="nav-info" class="clearfix">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li class="active"><a href="">Dashboard</a></li>
        <li class="active"><a href="">Track My Progress</a></li>
    </ul>
    <!-- END Navigation info -->

<?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post(); 
            //
            // Post Content here
            //
        } // end while
    } // end if
?>

    <!-- Datatables -->
    <div class="row-fluid">
    
    <div class="span7">
    
<form class="form-horizontal form-box" onsubmit="return false;">
                        <h4 class="form-box-header">Record Your Progress 
                            <span class="pull-right">                                    
                                <input type="text" id="example-input-datepicker" value="09/13/2013" class="input-medium input-datepicker">
                            </span>
                        </h4>
                       
                        <div class="form-box-content">
                         
                            <!-- Timepicker -->
                          
                  
                          <div class="control-group">
                                <label class="control-label" for="example-select-chosen">Morning</label>
                                <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Wash</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                </div>

                                           <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Moisterizer</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>

                                           <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Treatment</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>
                            </div>


                      <div class="control-group">
                                <label class="control-label" for="example-select-chosen">Evening</label>
                                <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Wash</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>

                                           <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Moisterizer</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>

                                           <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Treatment</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>
                            </div>

                             <div class="control-group">
                                <label class="control-label" for="example-select-chosen">Extra</label>
                                <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Spot Treatment</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>

                                           <div class="controls">
                                    <select id="example-select-chosen" class="select-chosen chzn-done" style="display: none;">
                                        <option>Neutrogena</option>
                                        <option>css</option>
                                        <option>javascript</option>
                                        <option>php</option>
                                        <option>mysql</option>
                                    </select><div id="example_select_chosen_chzn" class="chzn-container chzn-container-single" style="width: 220px;" title=""><a href="javascript:void(0)" class="chzn-single" tabindex="-1"><span>Mask</span><div><b></b></div></a><div class="chzn-drop" style="left: -9000px; width: 218px; top: 24px;"><div class="chzn-search"><input type="text" autocomplete="off" style="width: 183px;"></div><ul class="chzn-results"><li id="example_select_chosen_chzn_o_0" class="active-result result-selected" style="">html</li><li id="example_select_chosen_chzn_o_1" class="active-result" style="">css</li><li id="example_select_chosen_chzn_o_2" class="active-result" style="">javascript</li><li id="example_select_chosen_chzn_o_3" class="active-result" style="">php</li><li id="example_select_chosen_chzn_o_4" class="active-result" style="">mysql</li></ul></div></div>
                                    
                                </div>
                        
                            </div>
                            
            

                    <!-- Dropzone -->
        <div class="control-group">
                                <label class="control-label" for="example-file">Add a Photo</label>
                                <div class="controls">
                                    <input type="file" id="example-file">
                                </div>
                            </div>
                    <!-- END Dropzone -->


                            <!-- END Daterangepicker -->

                            <div class="form-actions">
                                <button class="btn btn-success"><i class="icon-check"></i> Save</button>
                               <!--  <button class="btn btn-danger"><i class="icon-remove"></i> Cancel</button> -->
                            </div>
                        </div>
                    </form>

                            </div>
<div class="span5">
   <table id="progress-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <!-- <th class="span1"></th> -->
                <th class="span1 hidden-phone"><i class="icon-calendar"></i></th>
                <th>Compliance</th>
                <!-- <th class="hidden-phone hidden-tablet"><i class="icon-envelope-alt"></i> Email</th> -->
                <th> Percentage</th>
            </tr>
        </thead>
        <tbody>
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
            <?php for($i=1; $i<31; $i++) { ?>
            <tr>
           <!--      <td class="span1">
                    <div class="btn-group">
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove"></i></a>
                    </div>
                </td> -->
                <td class="span1 hidden-phone">09/<?php echo $i; ?>/2013</td>
                <td><a href="javascript:void(0)">Morning, Night, Extra</a></td>
                <!-- <td class="hidden-phone hidden-tablet">user<?php echo $i; ?>@example.com</td> -->
                <?php $rand = rand(0, 5); ?>
                <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text'] ?></span></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>                          
    </div>
 
    <!-- END Datatables -->

    <!-- END Tiles -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

       <script>
            $(function() {
                /* Initialize Datatables */
                $('#progress-table').dataTable({"aoColumnDefs": [{"bSortable": false, "aTargets": [0]}]});
                $('#example-datatables2').dataTable();
                $('#example-datatables3').dataTable();
            });
        </script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>