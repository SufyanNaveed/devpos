<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h5 class="title">
            Appointments
            </h5>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="card-content">
            <div id="notify" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>

                <div class="message"></div>
            </div>
            <div class="card-body">
                <table id="cgrtable" class="table table-striped table-bordered zero-configuration">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Queue No</th>
                        <th><?php echo $this->lang->line('Pet Name') ?></th>
                        <th><?php echo $this->lang->line('Customer Name') ?></th>             
                        <th><?php echo $this->lang->line('Email') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Pet Photo') ?></th>
                        <th><?php echo $this->lang->line('Color') ?></th>
                        <th><?php echo $this->lang->line('Microchip #') ?></th>
                        <th><?php echo $this->lang->line('DOB') ?></th>
                        <th><?php echo $this->lang->line('Mark Difference') ?></th>
                        <th><?php echo $this->lang->line('Breed') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Booking Date') ?></th>
                        <th><?php echo $this->lang->line('From') ?></th>
                        <th><?php echo $this->lang->line('To') ?></th>
<!--                         <th><?php echo $this->lang->line('Status') ?></th>
                        <th><?php echo $this->lang->line('Action') ?></th>
 -->

                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $did=$this->aauth->get_user()->id;
                    $i = 1;
                    // foreach (Bookings($did) as $booking) {
                    foreach ($pets as $row) {
                        $pid   = $row->id;
                        //$total = $row->pet_color;
                    // if($pid==$booking->pet_id){
                        echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td width='20%;'>$row->queue_no <a <button type='button' class='btn btn-success btn-sm' href='".base_url()."pets/detail/".$row->booking_id."'>Detail</button></a> <a <button type='button' class='btn btn-primary btn-sm' href='".base_url()."pos_invoices/create/".$row->booking_id."'>POS</button></a> </td>";
                    echo "<td>$row->pet_name</td>";
                    echo "<td>$row->name</td>";
                    echo "<td>$row->email</td>
                    <td>$row->user_type</td>
                    <td><img class='round' src='".base_url()."userfiles/pet/". $row->pet_photo."' style='max-height: 100%;max-width: 100%'></td>
                    <td>$row->color</td>
                    <td>$row->microchip_number</td>
                    <td>$row->date_of_birth</td>
                    <td>$row->mark_difference</td>
                    <td>$row->pet_breed</td>
                    <td>$row->pet_type</td>
                    <td>$row->on</td>
                    <td>".date('h.i A', strtotime($row->from))."</td>
                    <td>".date('h.i A', strtotime($row->to))."</td>
                    </tr>";
                        $i++;
                    }
                        // }
                    // }
                    ?>
                     <!--  -->
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Queue No</th>
                        <th><?php echo $this->lang->line('Pet Name') ?></th>
                        <th><?php echo $this->lang->line('Customer Name') ?></th>
                        <th><?php echo $this->lang->line('Email') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Pet Photo') ?></th>
                        <th><?php echo $this->lang->line('Color') ?></th>
                        <th><?php echo $this->lang->line('Microchip #') ?></th>
                        <th><?php echo $this->lang->line('DOB') ?></th>
                        <th><?php echo $this->lang->line('Mark Difference') ?></th>
                        <th><?php echo $this->lang->line('Breed') ?></th>
                        <th><?php echo $this->lang->line('Type') ?></th>
                        <th><?php echo $this->lang->line('Booking Date') ?></th>
                        <th><?php echo $this->lang->line('From') ?></th>
                        <th><?php echo $this->lang->line('To') ?></th>
<!--                         <th><?php echo $this->lang->line('Status') ?></th>
                        <th><?php echo $this->lang->line('Action') ?></th>
 -->                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            //datatables
            $('#cgrtable').DataTable({responsive: true});

        });
    </script>

    <div id="delete_model" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Delete this pet?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Delete this pet?</p>
                </div>
                <div class="modal-footer">
                <input type="hidden" id="object-id_3" value="" name="pet_id">
                    <input type="hidden" id="action-url" value="pets/delete">
                    <button type="button" data-dismiss="modal" class="btn btn-primary"
                            id="delete-confirm"><?php echo $this->lang->line('Delete') ?></button>
                    <button type="button" data-dismiss="modal"
                            class="btn"><?php echo $this->lang->line('Cancel') ?></button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).on('click', ".discount-object", function (e) {
            e.preventDefault();
            $('#dobject-id').val($(this).attr('data-object-id'));
            $(this).closest('tr').attr('id', $(this).attr('data-object-id'));
            $('#pop_model').modal({backdrop: 'static', keyboard: false});
        });

        $(document).on('click', ".delete-object", function (e) {
            e.preventDefault();
            var pet_id=$(this).attr('data-object-id')
            console.log(pet_id);
            $('#action-url').val('pets/delete?pet_id='+pet_id);
            $(this).closest('tr').attr('id', $(this).attr('data-object-id'));
        });
    </script>






<!--                         <td>$row->status</td>
                    <td>
                    <a href='" . base_url("pets/edit?id=$pid") . 
                    "' class='btn btn-warning btn-sm'><i class='fa fa-pencil'></i> " . $this->lang->line('Edit') . "</a>
                    <a href='#' data-object-id='" . $pid . "' class='btn btn-danger btn-sm delete-object' title='Delete'>
                    <i class='fa fa-trash'></i></a>             
                    </td> -->