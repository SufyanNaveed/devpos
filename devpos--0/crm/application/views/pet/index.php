
<style>
    .underline{
        border-bottom: 1.5px solid #1b1919;
    }
    .pd-top{
        padding-top: 20px;
    }
    .pd-bottom{
        padding-bottom: 40px;
    }
    p {
        margin-top: -7px;
        margin-bottom: 0rem;
    }
    small, .small {
        font-size: 60%;
        font-weight: 500;
    }
    .pet_img{
        height: 100%;
        width: 108%;
    }

    .demo-wrap {
      overflow: hidden;
      position: relative;
    }

    .demo-bg {
      opacity: 0.2;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
    }

    .demo-content {
      position: relative;
    }
    a.btn-xs {
        min-width: 0px !important;
    }
</style>
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
        
        <div class="row">    
            <h3 class="box-title">Pets</h3>
            <a style="float: right;margin-top: -40px;" href="<?php echo base_url()?>pets/add " class="btn btn-success"> Add</a>
            <p><br></p>
        </div>                
        <div class="row">
            <?php foreach ($pets as $row) { ?>
                <div class="col-sm-4">
                    <div class="card card-block demo-wrap">
                        <img class="demo-bg" src="http://54.226.232.117/devpos/userfiles/pet/bg1.jpg" alt="">
                        <div class="demo-content">
                            <div style="text-align: right;">
                                <a href="<?php echo base_url()?>pets/edit?id=<?php echo $row->id; ?>" class="btn btn-warning btn-xs"> <i class='icon-pencil'></i></a>
                                <a href="<?php echo base_url()?>pets/preview?id=<?php echo $row->id; ?>" class="btn btn-info btn-xs"> <i class='icon-eye'></i></a>
                            </div>
                            <div class="row pd-top">
                                <label class="col-sm-6">OCCUPATION</label> 
                                <span class="col-sm-6 underline">Best Friend</span>
                            </div>
                            <div class="row">
                                <label class="col-sm-6">MICROSHIP #</label> 
                                <span class="col-sm-6 underline"><?php echo $row->microchip_number; ?></span>
                            </div>
                            <div class="row">
                                <label class="col-sm-6">MARK DIFFERENCE</label>                                 
                                <span class="col-sm-6 underline"><?php echo $row->mark_difference; ?></span>
                            </div>
                            <div class="row">
                                <label class="col-sm-6">TYPE</label> 
                                <span class="col-sm-6 underline"><?php echo $row->pet_type; ?></span>
                            </div>
                            <div class="row pd-bottom">
                                <label class="col-sm-6">BREED</label> 
                                <span class="col-sm-6 underline"><?php echo $row->pet_breed; ?></span>
                            </div>
                            <!-- <div class="row pd-bottom">
                                <label class="col-sm-6">SPECIAL MARKINGS</label> 
                                <span class="col-sm-6 underline">LOVELY EYES</span>
                            </div> -->

                            <div class="row">
                                <div class="col-sm-4" style="padding-top: 10px;">
                                    <img alt="branding logo" class="pet_img" src="<?php echo base_url("userfiles/pet/". $row->pet_photo); ?>">
                                </div>
                                <div class="col-sm-8">
                                    <small>Given name</small> 
                                    <p><?php echo $row->pet_name; ?></p>
                                    <small>Nationality</small> 
                                    <p><?php echo 'Any'; ?></p>
                                    <small>Breed</small> 
                                    <p><?php echo $row->pet_breed; ?></p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>Eye color</small>
                                            <p><?php echo $row->color; ?></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <small>Date of birth</small>
                                            <p><?php echo $row->date_of_birth; ?></p>                            
                                        </div> 
                                    </div> 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <small>Coat color</small>
                                            <p><?php echo $row->color; ?></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <small>Sex</small>
                                            <p><?php echo $row->pet_gender; ?></p>                            
                                        </div> 
                                    </div>                            
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <!-- <div class="card card-block">
                <div class="box-header with-border">
                        
                    <h3 class="box-title">Pets</h3>
                    <a href="<?php echo base_url()?>pets/add " class="btn btn-success"> Add</a>
                    <p><br></p>
                    <table id="invoices" class="cell-border example1 table table-striped table1 delSelTable">
                        <thead>
                        <tr>

                        <th>#</th>
                        <th><?php echo $this->lang->line('Pet Name') ?></th>
                        <th><?php echo $this->lang->line('Pet Photo') ?></th>
                        <th><?php echo $this->lang->line('Color') ?></th>
                        <th><?php echo $this->lang->line('Microchip #') ?></th>
                        <th><?php echo $this->lang->line('DOB') ?></th>
                        <th><?php echo $this->lang->line('Mark Difference') ?></th>
                        <th><?php echo $this->lang->line('Breed') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Action') ?></th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;
                    foreach ($pets as $row) {
                        $pid = $row->id;
                        $total = $row->pet_color;

                        echo "<tr>
                    <td>$i</td>
                    <td>$row->pet_name</td>
                    <td><img class='round' src='".base_url("userfiles/pet/". $row->pet_photo)."' style='max-height: 100%;max-width: 100%'></td>
                    <td>$row->color</td>
                    <td>$row->microchip_number</td>
                    <td>$row->date_of_birth</td>
                    <td>$row->mark_difference</td>
                    <td>$row->pet_breed</td>
                    <td>$row->pet_type</td>
                    <td>
                    <a href='" . base_url("pets/edit?id=$pid") . 
                    "' class='btn btn-warning btn-sm' title='Edit'><i class='icon-pencil'></i></a>
                    <a href='" . base_url("pets/preview?id=$pid") . 
                    "' class='btn btn-info btn-sm' title='Preview'><i class='icon-eye'></i></a>

                    </td></tr>";
                        $i++;
                    }
                    ?>
                        </tbody>

                        <tfoot>
                        <tr>
                        <th>#</th>
                        <th><?php echo $this->lang->line('Pet Name') ?></th>
                        <th><?php echo $this->lang->line('Pet Photo') ?></th>
                        <th><?php echo $this->lang->line('Color') ?></th>
                        <th><?php echo $this->lang->line('Microchip #') ?></th>
                        <th><?php echo $this->lang->line('DOB') ?></th>
                        <th><?php echo $this->lang->line('Mark Difference') ?></th>
                        <th><?php echo $this->lang->line('Breed') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Action') ?></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div> -->

    </div>
</div>

<script type="text/javascript">

    $(document).on('click', ".delete-object", function (e) {
            e.preventDefault();
            var pet_id=$(this).attr('data-object-id')
            console.log(pet_id);
            $('#action-url').val('pets/delete?pet_id='+pet_id);
            $(this).closest('tr').attr('id', $(this).attr('data-object-id'));
        });
</script>
