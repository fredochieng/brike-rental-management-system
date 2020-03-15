<?php $__env->startSection('title', 'SMS Listing'); ?>
<?php $__env->startSection('parentPageTitle', 'SMS'); ?>

<?php $__env->startSection('content'); ?>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <?php echo Form::open(['url' => action('MessageController@index'), 'method' => 'get']); ?>

            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <label>Search sms by property</label>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="property_id" required>
                                <option value="">Select property</option>
                                <?php $__currentLoopData = $property; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value='<?php echo e($item->property_id); ?>'><?php echo e($item->prop_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <select class="custom-select" name="message_status">
                                <option value="">Select SMS status</option>
                                <option value='1'>Pending</option>
                                <option value='2'>Sent</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary"><i class="fa fa-search"></i>
                                <span>Search SMS</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>

<?php if($searched == 'yes'): ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Number</th>
                                <th>Message Title</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Sent At</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $sms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($count + 1); ?></td>
                            <?php if($sms->prop_name == ''): ?>
                            <td>Not available</td>
                            <?php else: ?>
                            <td><?php echo e($sms->prop_name); ?></td>
                            <?php endif; ?>
                            <?php if($sms->room_no == ''): ?>
                            <td>Not available</td>
                            <?php else: ?>
                            <td><?php echo e($sms->room_no); ?></td>
                            <?php endif; ?>
                            <td><?php echo e($sms->message_title); ?></td>
                            <td><?php echo e($sms->phone_no); ?></td>
                            <td><a href="#modalViewMessage_<?php echo e($sms->message_id); ?>" data-toggle="modal"
                                    data-target="#modalViewMessage_<?php echo e($sms->message_id); ?>"
                                    class="btn btn-info btn-sm"><i class="icon-eye"></i>
                                    View Message
                                </a></td>
                            <?php if($sms->message_status == 1): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <?php elseif($sms->message_status == 2): ?>
                            <td><span class="badge badge-success">Sent</span></td>
                            <?php endif; ?>
                            <?php if($sms->message_status == 1): ?>
                            <td>Not available</td>
                            <?php elseif($sms->message_status == 2): ?>
                            <td><?php echo e($sms->sent_at); ?></td>
                            <?php endif; ?>
                        </tr>
                        <!-- Modal to view message -->
                        <div class="modal fade" id="modalViewMessage_<?php echo e($sms->message_id); ?>" tabindex="-1" role="dialog"
                            data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="title">Message to <?php echo e($sms->t_name); ?> (<?php echo e($sms->t_phone); ?>)
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Message sent at <?php echo e($sms->sent_at); ?>

                                        </h6>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <p><?php echo e($sms->message); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End modal view message -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive" style="font-size:12px">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Property</th>
                                <th>Room Number</th>
                                <th>Message Title</th>
                                <th>Phone Number</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Sent At</th>
                            </tr>
                        </thead>
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count => $sms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($count + 1); ?></td>
                            <?php if($sms->prop_name == ''): ?>
                            <td>Not available</td>
                            <?php else: ?>
                            <td><?php echo e($sms->prop_name); ?></td>
                            <?php endif; ?>
                            <?php if($sms->room_no == ''): ?>
                            <td>Not available</td>
                            <?php else: ?>
                            <td><?php echo e($sms->room_no); ?></td>
                            <?php endif; ?>
                            <td><?php echo e($sms->message_title); ?></td>
                            <td><?php echo e($sms->phone_no); ?></td>
                            <td><a href="#modalViewMessage_<?php echo e($sms->message_id); ?>" data-toggle="modal"
                                    data-target="#modalViewMessage_<?php echo e($sms->message_id); ?>"
                                    class="btn btn-info btn-sm"><i class="icon-eye"></i> View Message
                                </a></td>
                            <?php if($sms->message_status == 1): ?>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <?php elseif($sms->message_status == 2): ?>
                            <td><span class="badge badge-success">Sent</span></td>
                            <?php endif; ?>
                            <?php if($sms->message_status == 1): ?>
                            <td>Not available</td>
                            <?php elseif($sms->message_status == 2): ?>
                            <td><?php echo e($sms->sent_at); ?></td>
                            <?php endif; ?>
                        </tr>
                        <!-- Modal to view message -->
                        <div class="modal fade" id="modalViewMessage_<?php echo e($sms->message_id); ?>" tabindex="-1" role="dialog"
                            data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="title">Message to <?php echo e($sms->t_name); ?> (<?php echo e($sms->t_phone); ?>)
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Message sent at <?php echo e($sms->sent_at); ?>

                                        </h6>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <p><?php echo e($sms->message); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger pull-left"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End modal view message -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>